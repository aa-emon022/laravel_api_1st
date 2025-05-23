<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');  // primary key for customers table
            $table->string('name');
            $table->string('city');
            $table->decimal('commission', 5, 2);
            $table->unsignedBigInteger('customer_id');  // foreign key pointing to salesmen.customer_id
            $table->foreign('customer_id')->references('customer_id')->on('salesmen')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
