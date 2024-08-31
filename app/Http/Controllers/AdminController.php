<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

use App\Models\Food;

use App\Models\Reservation;

use App\Models\Foodchef;

use App\Models\Order;

use Illuminate\Support\Facades\Auth;

use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\Documentation;

use App\Models\recipes;

use Illuminate\Support\Facades\Mail;

use App\Mail\OrderStatusChanged;

use Illuminate\Support\Facades\Log;


class AdminController extends Controller
{
    public function user()
    {
        $data = user::all();
        return view("admin.users", compact('data'));
    }

    // public function adduser(Request $request)
    // {
    //     $data = new User();

    //     $data->name = $request->name;
    //     $data->email = $request->email;
    //     $data->usertype = $request->usertype; // Changed to 'usertype'

    //     $data->save();

    //     return redirect()->back();
    // }


    public function showAddUserForm()
    {
        return view('admin.adduser'); // Make sure you have this view
    }

    public function addUser(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'usertype' => 'required|string|max:50',
        ]);

        // Create a new user
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'usertype' => $request->input('usertype'),
            'password' => Hash::make('password123'), // Set a default password or handle this as needed
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'New user added successfully');
    }



    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.updateuser', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id, // Exclude current user's email from uniqueness check
            'usertype' => 'required|string|max:255',
        ]);

        // Find the user by ID and update their details
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->usertype = $request->usertype;
        $user->save();

        // Redirect back with a success message
        return redirect()->route('edituser', $id)->with('success', 'User updated successfully.');
    }


    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function usersearch(Request $request)
    {
        $searchTerm = $request->input('search'); // Correct input name

        // Fetch users based on the search term
        $data = User::where('name', 'LIKE', "%{$searchTerm}%")
            ->orWhere('email', 'LIKE', "%{$searchTerm}%")
            ->get();

        return view('admin.users', compact('data'));  // Adjust to your correct view
    }




    public function deletemenu($id)
    {
        $data = food::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function updateview($id)
    {
        $data = food::find($id);

        return view("admin.updateview", compact("data"));
    }

    public function foodmenu()
    {
        $data = food::all();
        return view("admin.foodmenu", compact("data"));
    }

    public function update(Request $request, $id)
    {
        $data = food::find($id);

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->image->move('foodimage', $imagename);

        $data->image = $imagename;

        $data->title = $request->title;

        $data->price = $request->price;

        $data->description = $request->description;

        $data->save();

        return redirect()->route('foodmenu');
    }


    public function upload(Request $request)
    {
        $data = new food;

        $image = $request->image;

        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->image->move('foodimage', $imagename);

        $data->image = $imagename;

        $data->title = $request->title;

        $data->price = $request->price;

        $data->description = $request->description;

        $data->save();

        return redirect()->route('foodmenu');
    }

    public function reservation(Request $request)
    {
        $data = new reservation;

        // $image = $request->image;

        // $imagename = time() . '.' . $image->getClientOriginalExtension();

        // $request->image->move('foodimage', $imagename);

        // $data->image = $imagename;

        $data->name = $request->name;

        $data->email = $request->email;

        $data->phone = $request->phone;

        $data->guest = $request->guest;

        $data->date = $request->date;

        $data->time = $request->time;

        $data->message = $request->message;


        $data->save();

        return redirect()->back();
    }

    public function viewreservation()
    {

        if (Auth::id()) {

            $data = reservation::all();

            return view("admin.adminreservation", compact("data"));
        } else {
            return redirect('login');
        }
    }




    public function viewchef()
    {
        $data = foodchef::all();

        return view("admin.adminchef", compact("data"));
    }

    public function uploadchef(Request $request)
    {

        $data = new foodchef;

        $image = $request->image;



        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $request->image->move('chefimage', $imagename);

        $data->image = $imagename;

        $data->name = $request->name;

        $data->speciality = $request->speciality;

        $data->save();

        return redirect()->back();
    }

    public function updatechef($id)
    {
        $data = foodchef::find($id);

        return view("admin.updatechef", compact("data"));
    }

    public function updatefoodchef(Request $request, $id)
    {
        $data = foodchef::find($id);

        $image = $request->image;

        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('chefimage', $imagename);

            $data->image = $imagename;
        }


        $data->name = $request->name;

        $data->speciality = $request->speciality;

        $data->save();

        return redirect()->back();
    }

    public function deletechef($id)
    {
        $data = foodchef::find($id);

        $data->delete();

        return redirect()->back();
    }

    // public function orders()
    // {
    //     $data=order::all();

    //     return view('admin.orders', compact('data'));
    // }

    // public function search(Request $request)
    // {
    //     $search = $request->search;

    //     $data = order::where('name', 'Like', '%' . $search . '%')->orwhere('foodname', 'Like', '%' . $search . '%')
    //         ->get();

    //     return view('admin.orders', compact('data'));
    // }

    public function search(Request $request)
    {
        // Validate the input
        $request->validate([
            'search' => 'required|string|max:255',
        ]);

        // Proceed with search logic
        $query = $request->input('search');
        $data = Order::where('name', 'LIKE', '%' . $query . '%')->get();

        if ($data->isEmpty()) {
            return back()->with('error', 'No results found for your search query.');
        }

        return view('admin.orders', compact('data'));
    }


    // public function on_the_way($id)
    // {
    //     $data = Order::find($id);

    //     $data->status = 'On the way';

    //     $data->save();

    //     return redirect('/orders');
    // }

    public function orders()
    {
        $data = Order::all();
        return view('admin.orders', compact('data'));
    }


    public function on_the_way($id)
    {
        $data = Order::find($id);

        if (!$data) {
            return redirect('/orders');
        }

        $data->payment_status = 'On the way';
        $data->save();

        Mail::to($data->email)->send(new OrderStatusChanged($data));


        return redirect('/orders');
    }

    public function delivered($id)
    {

        $data = Order::find($id);

        if (!$data) {
            return redirect('/orders');
        }

        $data->payment_status = 'Delivered';

        $data->save();

        Mail::to($data->email)->send(new OrderStatusChanged($data));

        return redirect('/orders');
    }


    public function print_pdf($id)
    {
        $data = Order::find($id);

        $pdf = Pdf::loadView('admin.invoice', compact('data'));

        return $pdf->download('invoice.pdf');
    }

    public function recipes()
    {
        $data = recipes::all();

        return view("admin.recipes", compact("data"));
    }

      
}
