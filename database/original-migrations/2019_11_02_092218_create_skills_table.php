<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('version')->nullable();
            $table->string('link')->nullable();
            $table->boolean('is_free_app')->default(0);
            $table->string('color')->nullable();
            $table->boolean('color_text_dark')->default(0);
            $table->string('subtitle')->nullable();
            $table->text('details')->nullable();
            $table->boolean('is_favorite')->default(0);
            $table->float('rating', 2, 1)->default(0);
            $table->string('image')->nullable();
            $table->text('blockquote_text')->nullable();
            $table->string('blockquote_who')->nullable();
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
        Schema::dropIfExists('skills');
    }
}
