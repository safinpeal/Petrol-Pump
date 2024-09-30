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
        Schema::create('product', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            
            $table->string('product_name'); // Name of the product
            $table->string('company_name'); // Name of the company (note: you might want to use a foreign key instead)
            
            $table->date('date'); // Date associated with the product

            $table->timestamps(); // Created at and updated at timestamps

            // Optional: Add foreign key constraint if there's a corresponding company table
            // $table->foreign('company_id')->references('id')->on('companies');
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
