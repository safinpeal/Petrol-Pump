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
        Schema::create('expense', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('desc'); // Description of the expense
            $table->date('date'); // Date of the expense
            $table->decimal('price'); // Price of the expense with 10 digits, 2 after the decimal point
            $table->decimal('cost'); // Cost of the expense with 10 digits, 2 after the decimal point

            $table->timestamps(); // Created at and updated at timestamps
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
