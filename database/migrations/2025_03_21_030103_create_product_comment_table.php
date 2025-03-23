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
                Schema::create('product_comment', function (Blueprint $table) {
                    $table->id();
                    $table->unsignedBigInteger('userId'); // số nguyên không âm
                    // Khóa ngoại:
                    $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
                    $table->unsignedInteger('productId');
                    $table->foreign('productId')->references('id')->on('products')->onDelete('cascade');
                    $table->string('comment',500);
                    $table->timestamps();
                });
            }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_comment');
    }
};
