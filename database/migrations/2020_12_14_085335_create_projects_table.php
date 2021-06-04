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
            $table->string('slug')->nullable()->unique();
            $table->string('title');
            $table->integer('order')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_display')->default(false);
            $table->boolean('is_favorite')->default(0);
            $table->string('status')->nullable();

            $table->foreignId('experience_type_id')->nullable();
            $table->foreign('experience_type_id')->references('id')->on('experience_types')->onDelete('cascade');

            $table->foreignId('formation_id')->nullable();
            $table->foreign('formation_id')->references('id')->on('formations')->onDelete('cascade');

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
