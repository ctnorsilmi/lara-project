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
        Schema::create('reports', function (Blueprint $table) {
            $table->id(); //integer auto increment (if remove no 2 tak boleh guna dah no 2 tu.)
            $table ->string('title');
            $table ->string('descriptions');
            $table ->integer('priority');
            $table->timestamps(); //utk db audit (bila last audit)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
