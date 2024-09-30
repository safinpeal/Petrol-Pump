<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function create(){
        return view("companies.create");
    }
    public function store(Request $request){
        
        $validatedData = $request->validate([
            
            
            'company_name' => 'required',
            'address'=>'required',
            'company_poc'=>'required',
            'company_address'=>'required',
            'company_contact'=>'required',
            'company_desc'=>'required',
        ]);

        // Store the product data using the DB facade
        DB::table('company')->insert([
            
            'company_name' => $validatedData['company_name'],
            
            'address' => $validatedData['company_address'],
            'contact' => $validatedData['company_contact'],
            'description' => $validatedData['company_desc'],
            'poc' => $validatedData['company_poc'],
        ]);

        // Redirect or return a response after storing
        return redirect()->route('companies.create')->with('success', 'Product added successfully!');
    }
    

}
