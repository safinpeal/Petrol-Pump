<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBuy extends Model
{
    use HasFactory;
    protected $table = 'product_buys';

    // Define the fillable fields
    protected $fillable = [
        'product_name',
        'company_name',
        'price',
        'quantity',
    ];
}
