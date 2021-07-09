<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('nacionalidade');
            $table->string('estado_civil');
            $table->string('profissao');
            $table->string('rg');
            $table->string('cpf');
            $table->text('endereço');
            $table->string('telefone');
            $table->string('email');
            $table->unsignedInteger('tipo');
            $table->timestamps();
        });
    }

// SOBRE O LOCADOR
// Nome: 
// Nacionalidade: 
// Estado Civil: 
// Profissão: 
// RG: 
// CPF: 
// Endereço: 
// Telefone: 
// E-mail: alfredo neto
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
