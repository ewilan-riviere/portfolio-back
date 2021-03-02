<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_links', function (Blueprint $table) {
            $table->id();
            $table->string('back_repository')->nullable();
            $table->string('back_project')->nullable();
            $table->string('front_repository')->nullable();
            $table->string('front_project')->nullable();
            $table->string('app_repository')->nullable();
            $table->string('app_project')->nullable();

            $table->foreignId('project_id')->nullable();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_links');
    }
}
