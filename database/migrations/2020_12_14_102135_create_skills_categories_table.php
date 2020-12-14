<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills_categories', function (Blueprint $table) {
            $table->string('slug')->nullable()->unique();
            $table->string('title');
            $table->timestamps();
        });

        Schema::table('skills', function (Blueprint $table) {
            $table->string('skill_category_slug')->after('blockquote_who');
            $table->foreign('skill_category_slug')->references('slug')->on('skills_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills_categories');
    }
}
