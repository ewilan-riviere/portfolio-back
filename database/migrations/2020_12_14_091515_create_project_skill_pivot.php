<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectSkillPivot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        * Projects <=> Skills: Many to Many
        *
        * @return void
        */
        Schema::create('project_skill', function (Blueprint $table) {
            $table->string('project_slug');
            $table->foreign('project_slug')->references('slug')->on('projects')->onDelete('cascade');
            $table->string('skill_slug');
            $table->foreign('skill_slug')->references('slug')->on('skills')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_skill');
    }
}
