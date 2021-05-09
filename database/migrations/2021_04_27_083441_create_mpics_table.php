<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMpicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mpics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('img')->nullable();
            $table->string('text1')->nullable();
            $table->string('text2')->nullable();
            $table->string('am')->nullable();
            $table->string('master_id')->nullable();
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
        Schema::dropIfExists('mpics');
    }
}
