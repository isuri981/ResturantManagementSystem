<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        $ingredients = $request->input('ingredients');

        // Here you can process the order, save it to the database, or perform any necessary actions
        // For example, you could log the order details, validate the ingredients, calculate total, etc.

        // Assuming everything is successful, return a JSON response
        return response()->json(['message' => 'Order placed successfully!', 'ingredients' => $ingredients]);
    }

    public function analysisorders_api()
    {
        $orders = Order::all();
        return response()->json($orders);
    }

    public function index()
    {
       
        return view('admin.analysisorders');
    }

    public function search(Request $request)
    {
        $searchQuery = $request->input('search');
        $orders = Order::where('category', 'like', '%' . $searchQuery . '%')->get();
        return response()->json($orders);
    }
}
