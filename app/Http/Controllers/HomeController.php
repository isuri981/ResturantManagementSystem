<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Food;

use App\Models\Foodchef;

use App\Models\Cart;

use App\Models\Order;

use Illuminate\Support\Facades\Session;

use Stripe\Stripe;

use Stripe\Charge;

use App\Models\User;







class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {

            return redirect('redirects');
        } else

            $data = food::all();

        $data2 = foodchef::all();

        return view("home", compact("data", "data2"));
    }

    public function redirects()
    {
        $data = food::all();

        $data2 = foodchef::all();

        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {

            return view('admin.adminhome');
        } else {

            $user_id = Auth::id();

            $count = cart::where('user_id', $user_id)->count();

            return view('home', compact('data', 'data2', 'count'));
        }
    }

    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $user_id = Auth::id();

            $foodid = $id;

            $quantity = $request->quantity;

            $cart = new cart;

            $cart->user_id = $user_id;

            $cart->food_id = $foodid;

            $cart->quantity_id = $quantity;

            $cart->save();

            return redirect()->back();
        } else {
            return redirect('/login');
        }
    }

    public function showcart(Request $request, $id)
    {

        $count = cart::where('user_id', $id)->count();

        if (Auth::id() == $id) {



            $data2 = cart::select('*')->where('user_id', '=', $id)->get();

            $data = cart::where('user_id', $id)->join('food', 'carts.food_id', '=', 'food.id')->get();

            return view('showcart', compact('count', 'data', 'data2'));
        } else {

            return redirect()->back();
        }
    }


    // public function remove($id)
    // {
    //     $data = cart::find($id);

    //     $data->delete();

    //     return redirect()->back();
    // }

    // public function remove($id)
    // {
    //     $data = cart::find($id);

    //     if (!$data) {
    //         // Handle case where record with $id is not found, maybe redirect or show an error message
    //         return redirect()->back()->with('error', 'Record not found.');
    //     }

    //     $data->delete();

    //     return redirect()->back()->with('success', 'Record deleted successfully.');
    // }

    public function remove($id)
    {
        // Logic to remove the item from the cart
        Cart::remove($id); // Example method, adjust as needed

        // Redirect back to the cart or a specific page
        return redirect()->back()->with('success', 'Item removed from cart');
    }






    public function orderconfirm(Request $request)
    {
        foreach ($request->foodname as $key => $foodname) {
            $data = new order;

            $data->foodname = $foodname;

            $data->price = $request->price[$key];

            $data->quantity = $request->quantity[$key];

            $data->name = $request->name;

            $data->phone = $request->phone;

            $data->address = $request->address;

            $data->save();
        }

        return redirect()->back();
    }

    public function stripe()
    {
        return view('stripe');
    }

    public function stripePost(Request $request)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            Charge::create([
                "amount" => 100 * 100, // Amount in cents
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from Klassy Cafe."
            ]);

            Session::flash('success', 'Payment successful!');
            return back();
        } catch (\Exception $e) {
            Session::flash('error', $e->getMessage());
            return back();
        }
    }


    public function myorders()
    {

        $user = Auth::user()->id;

        $count = Cart::where('user_id', $user)->get()->count();

        $order = Order::where('id', $user)->get();

        return view('order', compact('count', 'order'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'usertype' => 'required|string',
        ]);

        // Create a new user
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->usertype = $request->input('usertype');
        $user->save();

        // Redirect or return response
        return redirect()->back()->with('success', 'User added successfully');
    }
}
