<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->string('slug')->nullable()->unique();
            $table->string('title');
            $table->integer('order')->nullable();
            $table->text('extract')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('image_title')->nullable();
            $table->string('font')->nullable();
            $table->string('link_repository')->nullable();
            $table->string('link_project')->nullable();
            $table->string('status')->default('draft');
            $table->string('formation_slug')->nullable();
            $table->foreign('formation_slug')->references('slug')->on('formations')->onDelete('cascade');
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
        Schema::dropIfExists('projects');
    }
}
