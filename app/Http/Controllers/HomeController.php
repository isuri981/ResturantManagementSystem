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


    public function remove($id)
    {
        $data = cart::find($id);

        $data->delete();

        return redirect()->back();
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
        Stripe::setApiKey(env('STRIPE_SECRET'));

        Charge::create([
            "amount" => 100 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from complete."
        ]);

        Session::flash('success', 'Payment successful!');

        return redirect()->back();
    }

    public function myorders()
    {
        return view('order');
    }

    

}
