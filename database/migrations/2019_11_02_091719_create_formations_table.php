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
            $table->string('certificate')->nullable();
            $table->string('logo')->nullable();
            $table->string('color')->default('#000000');
            $table->boolean('color_text_white')->default(false);
            $table->text('resume')->nullable();
            $table->string('type')->nullable();
            $table->string('place')->nullable();
            $table->string('place_link')->nullable();
            $table->string('vocational')->nullable();
            $table->string('vocational_link')->nullable();
            $table->string('promo')->nullable();
            $table->string('promo_link')->nullable();
            $table->string('level')->nullable();
            $table->date('date_begin')->nullable();
            $table->date('date_end')->nullable();
            $table->string('project_title')->nullable();
            $table->text('project_resume')->nullable();
            $table->string('project_image')->nullable();
            $table->string('project_type')->nullable();
            $table->string('project_link')->nullable();
            $table->string('project_file')->nullable();
            $table->boolean('finished')->default(true);
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
