<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('title_link')->nullable();
            $table->string('logo')->nullable();
            $table->string('place')->nullable();
            $table->string('place_link')->nullable();
            $table->string('promo')->nullable();
            $table->string('promo_link')->nullable();
            $table->integer('level')->nullable();
            $table->year('date_begin')->nullable();
            $table->year('date_end')->nullable();
            $table->string('project')->nullable();
            $table->string('project_link')->nullable();
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
        Schema::dropIfExists('formations');
    }
}
