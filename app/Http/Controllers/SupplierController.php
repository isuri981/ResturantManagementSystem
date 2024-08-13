<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suppliers;



class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Suppliers::all();
        return view('admin.suppliers', compact('suppliers'));
    }

    public function create()
    {
        return view('admin.suppliers');
    }

    public function showAddSupplierForm()
    {
        return view('admin.addsuppliers');
    }

    // Method to handle form submission
    public function storeSupplier(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'contact_info' => 'required|string|max:255',
        ]);

        $suppliers = new Suppliers();
        $suppliers->name = $validated['name'];
        $suppliers->contact_info = $validated['contact_info'];
        $suppliers->save();

        return redirect()->route('admin.suppliers')->with('success', 'Supplier added successfully');
    }



    public function edit($id)
    {
        $suppliers = Suppliers::findOrFail($id); // Use $supplier instead of $suppliers
        return view('admin.updatesuppliers', compact('suppliers')); // Pass the correct variable
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'contact_info' => 'required|string|max:255',
        ]);

        $suppliers = Suppliers::findOrFail($id); // Use $supplier instead of $suppliers
        $suppliers->name = $validated['name'];
        $suppliers->contact_info = $validated['contact_info'];
        $suppliers->save();

        return redirect()->route('admin.suppliers')->with('success', 'Supplier updated successfully');
    }

    public function destroy($id)
    {
        $suppliers = Suppliers::findOrFail($id);
        $suppliers->delete();

        return redirect()->route('admin.suppliers')->with('success', 'Supplier deleted successfully');
    }
}
