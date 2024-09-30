<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id(); // This creates an auto-incrementing primary key column
           
            $table->unsignedBigInteger('product_id'); // Unique identifier for the product
            $table->decimal('price', 8, 2); // Price with up to 6 digits before decimal and 2 digits after
            $table->integer('quantity'); // Quantity of the product
            

            $table->timestamps(); // Adds created_at and updated_at columns

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
