<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('sujets', function (Blueprint $table) {
        $table->text('description')->nullable();
        $table->string('profile')->nullable();
    });
}

public function down()
{
    Schema::table('sujets', function (Blueprint $table) {
        $table->dropColumn('description');
        $table->dropColumn('profile');
    });
}

};
