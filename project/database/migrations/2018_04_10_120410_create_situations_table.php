<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSituationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('situation', function (Blueprint $table) {
            $table->increments('code');
            $table->integer('codelocalisation');
            $table->integer('codecadrer');
            $table->integer('codetyper');
            $table->integer('codesourcer');
            $table->text('libelle');
            $table->text('description');
            $table->text('contexte');
            $table->text('environnement');
            $table->text('moyen');
            $table->longText('avispersonnel');
            $table->boolean('obligatoire');
            $table->date('datedebut');
            $table->date('datefin');
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
        Schema::dropIfExists('situation');
    }
}
