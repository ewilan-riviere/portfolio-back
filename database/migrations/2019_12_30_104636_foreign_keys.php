<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("skills", function (Blueprint $table) {
            $table->integer("category_id")->unsigned()->index();
            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade");
        });
    }
}
