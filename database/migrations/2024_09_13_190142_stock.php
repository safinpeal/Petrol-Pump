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
        Schema::create('stock', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->unsignedBigInteger('product_id'); // Foreign key for the product
            $table->string('product_name'); // Name of the product
            $table->decimal('quantity'); // Quantity of the product in stock, e.g., liters
            $table->string('unit'); // Unit of measurement (e.g., 'liters', 'units')
            $table->string('stock_type'); // Type of stock movement (e.g., 'addition', 'subtraction')
            $table->date('stock_date'); // Date of the stock movement
            $table->text('notes')->nullable(); // Additional notes or comments (optional)

            $table->timestamps(); // Created at and updated at timestamps

            // Foreign key constraint (assuming a 'products' table exists)
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
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
