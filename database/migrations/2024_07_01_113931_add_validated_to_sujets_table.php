<?php

// database/migrations/xxxx_xx_xx_xxxxxx_add_validated_to_sujets_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddValidatedToSujetsTable extends Migration
{
    public function up()
    {
        Schema::table('sujets', function (Blueprint $table) {
            $table->boolean('validated')->default(false);
        });
    }

    public function down()
    {
        Schema::table('sujets', function (Blueprint $table) {
            $table->dropColumn('validated');
        });
    }
}
