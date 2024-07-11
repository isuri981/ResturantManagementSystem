<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Food;

use App\Models\Reservation;

use App\Models\Foodchef;

use App\Models\Order;

use Illuminate\Support\Facades\Auth;

use Barryvdh\DomPDF\Facade\Pdf;




class AdminController extends Controller
{
    public function user()
    {
        $data = user::all();
        return view("admin.users", compact('data'));
    }

    public function adduser(Request $request)
    {
        $data = new User();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->usertype = $request->usertype; // Changed to 'usertype'

        $data->save();

        return redirect()->back();
    }

    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
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

    public function search(Request $request)
    {
        $search = $request->search;

        $data = order::where('name', 'Like', '%' . $search . '%')->orwhere('foodname', 'Like', '%' . $search . '%')
            ->get();

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

        $data->status = 'On the way';
        $data->save();

        return redirect('/orders');
    }

      public function delivered($id)
    {
        $data = Order::find($id);

        $data->status = 'Delivered';

        $data->save();

        return redirect('/orders');
    }

    public function print_pdf($id)
    {
        $data = Order::find($id);

        $pdf = Pdf::loadView('admin.invoice', compact('data'));
    
        return $pdf->download('invoice.pdf');
    }
}
