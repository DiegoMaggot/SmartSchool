<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvaliacaoQuestaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacao_questao', function (Blueprint $table) {
            $table->bigInteger('id_avaliacao')->unsigned()->nullable();
            $table->bigInteger('id_questao')->unsigned()->nullable();
            $table->foreign('id_avaliacao')->references('id')->on('avaliacoes')->onDelete('cascade');
            $table->foreign('id_questao')->references('id')->on('questoes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaliacao_questao');
    }
}
