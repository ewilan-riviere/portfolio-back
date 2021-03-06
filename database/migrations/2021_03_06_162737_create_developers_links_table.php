<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevelopersLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developers_links', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('url')->nullable();
            $table->boolean('is_primary')->default(false);
            $table->timestamps();

            $table->foreignId('developer_id')->nullable();
            $table->foreign('developer_id')->references('id')->on('developers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('developers_links');
    }
}
