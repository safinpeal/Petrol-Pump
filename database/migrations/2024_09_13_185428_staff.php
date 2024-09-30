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
        Schema::create('staff', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Name of the staff member
            $table->string('position'); // Job position of the staff member
            $table->string('department'); // Department where the staff member works
            $table->string('email')->unique(); // Email address of the staff member (unique)
            $table->string('phone')->nullable(); // Phone number of the staff member (optional)
            $table->date('hire_date'); // Date the staff member was hired
            $table->decimal('salary', 10, 2); // Salary of the staff member with 10 digits, 2 after the decimal point
            $table->string('bank_account')->nullable(); // Bank account number (optional)
            $table->string('bank_address')->nullable(); // Bank address (optional)

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
