<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepevaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repevaluations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('formation');
            $table->string('rqun');
            $table->string('rqdeux');
            $table->string('rqtrois');
            $table->string('rqquatre');
            $table->string('rqcinq');
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
        Schema::dropIfExists('repevaluations');
    }
}
