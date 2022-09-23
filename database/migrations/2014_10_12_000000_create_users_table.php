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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable()->default('img/icone/avatar.png');
            $table->string('endereco');
            $table->string('cidade');
            $table->string('cep');
            $table->string('telefone');
            $table->string('balance')->nullable()->default(1000);
            $table->string('user_type')->default('user');
            $table->string('cpf')->nullable()->default('000-000-000-00');
            $table->string('nascimento')->default('01/01/1970');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
