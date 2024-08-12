<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ingredient;

use App\Models\recipes;
use App\Models\Dish;


class IngredientController extends Controller
{
    public function getIngredients()
    {
        $ingredients = Ingredient::all();
        return response()->json($ingredients);
    }

    public function index()
    {
        return view('ingredients');
    }

    public function placeOrder(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'ingredients' => 'required|array',
        ]);

        // Create a new order
        $order = recipes::create([
            'ingredients' => $request->input('ingredients'),
            'status' => 'pending',
        ]);

        // Return a response
        return response()->json(['message' => 'Order placed successfully!', 'order' => $order]);
    }

    
}
