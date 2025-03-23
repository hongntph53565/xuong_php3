<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
// PHP ARTISAN MIGRATE
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id'); // id: kiểu int | unsigned(số nguyên không âm) | primary key (khóa chính)|AI(tự động tăng)
            $table->string('name',200);
            $table -> float('price',8,2); // (trước dấu phẩy chứa được 8 chữ số và sau dấu phẩy chứa được 2 chũ số) 
            $table->integer('view');
            $table->timestamps(); // đi tạo 2 trường created_at và updated_at
        });
    }

// PHP ARTISAN MIGRATE:ROLLBACK | RESET
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
