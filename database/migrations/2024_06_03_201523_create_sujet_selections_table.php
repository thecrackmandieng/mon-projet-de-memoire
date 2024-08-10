<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSujetSelectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sujet_selections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('sujet_id')->nullable();
            $table->timestamps();

            // Foreign keys
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('sujet_id')->references('id')->on('sujets');
        });
    }

    /**
     * Reverse and drop the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sujet_selections');
    }
}
