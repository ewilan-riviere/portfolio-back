<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable()->unique();
            $table->string('title')->nullable();
            $table->string('certificate')->nullable();
            $table->string('color')->default('#000000');
            $table->boolean('color_text_white')->default(false);
            $table->text('resume')->nullable();
            $table->string('type')->nullable();
            $table->string('level')->nullable();
            $table->date('date_begin')->nullable();
            $table->date('date_end')->nullable();
            $table->boolean('is_finished')->default(true);
            $table->boolean('is_display')->default(false);

            $table->foreignId('experience_type_id')->nullable();
            $table->foreign('experience_type_id')->references('id')->on('experience_types')->onDelete('cascade');

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
        Schema::dropIfExists('formations');
    }
}
