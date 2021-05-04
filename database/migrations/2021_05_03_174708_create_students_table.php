<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
           $table->id();
           $table->foreign('id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
           $table->string('nome',100);
           $table->date('nascimento');
           $table->integer('ano');
           $table->integer('cep');
           $table->string('rua',120);
           $table->integer('n');
           $table->string('complemento',50);
           $table->string('bairro',100);
           $table->string('cidade',50);
           $table->string('estado',50);
           $table->string('mothername',100);
           $table->string('mothercpf',20);
           $table->date('payment');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
