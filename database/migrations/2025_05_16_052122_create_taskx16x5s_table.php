<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('taskx16x5s', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string('Password');
            $table->integer("isActive");
            $table->integer("isDelete");
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('taskx16x5s');
    }
};
