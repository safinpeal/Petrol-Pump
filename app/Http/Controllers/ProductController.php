<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        
        $validatedData = $request->validate([
            
            'product_name' => 'required',
            
            'company_name' => 'nullable',
        ]);

        // Store the product data using the DB facade
        DB::table('product')->insert([
            
            'product_name' => $validatedData['product_name'],
            
            'company_name' => $validatedData['company_name'],
            'date' => now(), // Storing the current date
        ]);

        // Redirect or return a response after storing
        return redirect()->route('products.create')->with('success', 'Product added successfully!');
    }

    }

