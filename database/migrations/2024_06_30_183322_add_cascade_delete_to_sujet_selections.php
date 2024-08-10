<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCascadeDeleteToSujetSelections extends Migration
{
    public function up()
    {
        Schema::table('sujet_selections', function (Blueprint $table) {
            $table->dropForeign(['sujet_id']);
            $table->foreign('sujet_id')
                  ->references('id')
                  ->on('sujets')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('sujet_selections', function (Blueprint $table) {
            $table->dropForeign(['sujet_id']);
            $table->foreign('sujet_id')
                  ->references('id')
                  ->on('sujets');
        });
    }
}
