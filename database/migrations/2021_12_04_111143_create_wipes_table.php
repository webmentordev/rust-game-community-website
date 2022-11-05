<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wipes', function (Blueprint $table) {
            $table->id();
            $table->integer('day');
            $table->string('month');
            $table->integer('p_day');
            $table->string('p_month');
            $table->string('bp_wipe');
            $table->string('rp_wipe');
            $table->string('status')->default('pending');
            $table->integer('year');
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
        Schema::dropIfExists('wipes');
    }
}
