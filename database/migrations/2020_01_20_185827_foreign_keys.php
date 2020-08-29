<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        * Skills: One to Many
        *
        * @return void
        */
        Schema::table('skills', function (Blueprint $table) {
            $table->integer('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });

        /*
        * Projects <=> Skills: Many to Many
        *
        * @return void
        */
        Schema::create('project_skill', function (Blueprint $table) {
            $table->unsignedInteger('id')->nullable();
            $table->timestamps();
        });
        Schema::table('project_skill', function (Blueprint $table) {
            $table->integer('project_id')->unsigned()->index();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->integer('skill_id')->unsigned()->index();
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
        });

        /*
        * Projects <=> Skills: Many to Many
        *
        * @return void
        */
        Schema::create('project_project_member', function (Blueprint $table) {
            $table->unsignedInteger('id')->nullable();
            $table->timestamps();
        });
        Schema::table('project_project_member', function (Blueprint $table) {
            $table->integer('project_id')->unsigned()->index();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->integer('project_member_id')->unsigned()->index();
            $table->foreign('project_member_id')->references('id')->on('projects_members')->onDelete('cascade');
        });
    }
}
