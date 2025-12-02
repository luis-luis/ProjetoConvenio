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
        Schema::create('animais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // tutor/owner
            $table->string('nome');
            $table->string('especie')->nullable();
            $table->string('raca')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->enum('sexo', ['M', 'F'])->nullable();
            $table->text('observacoes')->nullable();
            $table->timestamps();

            // chave estrangeira
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animais');
    }
};
