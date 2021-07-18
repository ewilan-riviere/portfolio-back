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
            $table->id();
            $table->string('title');
            $table->string('slug')->nullable()->unique();
            $table->json('subtitle')->nullable();
            $table->integer('order')->nullable();
            $table->json('abstract')->nullable();
            $table->json('description')->nullable();
            $table->boolean('is_display')->default(0);
            $table->boolean('is_favorite')->default(0);
            $table->boolean('is_private')->default(0);

            $table->foreignId('experience_type_id')->nullable();
            $table->foreign('experience_type_id')->references('id')->on('experience_types');

            $table->foreignId('project_status_id')->nullable();
            $table->foreign('project_status_id')->references('id')->on('project_status');

            $table->foreignId('formation_id')->nullable();
            $table->foreign('formation_id')->references('id')->on('formations');

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
