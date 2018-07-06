<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSlugToTrainers extends Migration
{
    /**
     * Run the migrations.
     *Creacion del slug para ser mostrado
     * @return void
     */
    public function up()
    {
        Schema::table('trainrs', function (Blueprint $table) {
            $table->string('slug')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trainrs', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
