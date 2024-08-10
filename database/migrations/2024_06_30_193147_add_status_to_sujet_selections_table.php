<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToSujetSelectionsTable extends Migration
{
    public function up()
    {
        Schema::table('sujet_selections', function (Blueprint $table) {
            $table->string('status')->nullable(); // Adjust the column type as per your requirements
        });
    }

    public function down()
    {
        Schema::table('sujet_selections', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
