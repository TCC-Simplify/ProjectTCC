<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('atividade');
            $table->string('descricao');
            $table->string('prazo');
            $table->string('finalizacao');
            $table->integer('dificuldade');
	    $table->integer('tipo_destinatario'); // 1 - ind e 2 - equipe
            $table->integer('destinatario');
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
        Schema::dropIfExists('atividades');
    }
}
