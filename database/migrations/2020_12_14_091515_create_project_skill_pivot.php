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
            $table->foreignId('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreignId('skill_id');
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
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
