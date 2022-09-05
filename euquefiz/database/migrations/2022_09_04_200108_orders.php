<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_name')->constrained('users')->onDelete('cascade')->onDelete('cascade');
            $table->foreignId('product_name')->constrained('products')->onDelete('cascade')->onDelete('cascade');
            $table->string('quantity')->nullable();
            $table->decimal('price')->default('0.00');
            $table->text('status')->nullable();
            $table->decimal('stock')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
