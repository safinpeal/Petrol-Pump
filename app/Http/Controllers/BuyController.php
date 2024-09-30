<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\ProductBuy;
use App\Models\Stock;
use Illuminate\Http\Request;

class BuyController extends Controller
{

    public function productBuy(){
        $companies = DB::table('company')->get();
        $products = DB::table('product')->get();
        return view('product-buy', compact('companies', 'products'));
    }
    public function placeOrder(Request $request){

        
        $request->validate([
            'product_id' => 'required|integer',
            'company_id' => 'required|integer',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
        ]);

        ProductBuy::create([
            'product_name' => $request->product_id,
            'company_name' => $request->company_id,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);
    
        return redirect()->back()->with('success', 'Product purchase recorded successfully!');
    }

    public function productReceive(){
        $companies = DB::table('company')->get();
        $products = DB::table('product')->get();
        return view('product-receive', compact('companies', 'products'));
    }
public function placeReceive(Request $request){
    $validated = $request->validate([
        'product_id' => 'required|integer',
        'company_id' => 'required|integer',
        'quantity' => 'required|integer',
    ]);

    // Check if a record with the same product_id and company_id already exists
    $existingStock = Stock::where('product_id', $validated['product_id'])
    
    ->first();

if ($existingStock) {
// If the record exists, update the quantity
$existingStock->quantity += $validated['quantity'];
$existingStock->save();
} else {
// If no record exists, insert a new one
Stock::create([
'product_id' => $validated['product_id'],
'company_id' => $validated['company_id'],
'quantity' => $validated['quantity'],
]);
}

return redirect()->back()->with('success', 'Stock updated successfully.');
}




}