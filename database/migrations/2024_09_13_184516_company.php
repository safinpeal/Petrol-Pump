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
        Schema::create('company', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('company_name'); // Name of the company
            $table->string('address'); // Address of the company
            
            $table->string('contact'); // Contact information
            $table->string('poc'); // Contact information
            $table->text('description'); // Description of the company

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
