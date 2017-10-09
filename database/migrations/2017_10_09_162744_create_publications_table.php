<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('publications', function (Blueprint $table) {
            $table->dropForeign('market_id');
            $table->dropForeign('publication_type_id');
            $table->increments('id');
            $table->integer('market_id')->unsigned();
            $table->foreign('market_id')->references('id')->on('markets');
            $table->integer('publication_type_id')->unsigned();
            $table->foreign('publication_type_id')->references('id')->on('publication_types');
            $table->integer('year')->change();
            $table->integer('print')->unsigned()->nullable();
            $table->string('cover')->nullable();
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
        Schema::dropIfExists('publications');
    }
}
