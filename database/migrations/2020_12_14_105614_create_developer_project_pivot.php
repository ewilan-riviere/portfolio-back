<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeveloperProjectPivot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developer_project', function (Blueprint $table) {
            $table->string('project_slug');
            $table->foreign('project_slug')->references('slug')->on('projects')->onDelete('cascade');
            $table->string('developer_slug');
            $table->foreign('developer_slug')->references('slug')->on('developers')->onDelete('cascade');
            $table->string('role')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('developer_project');
    }
}
