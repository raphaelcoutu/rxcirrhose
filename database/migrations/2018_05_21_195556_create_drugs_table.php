<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drugs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('article_id');
            $table->string('name');
            $table->tinyInteger('childa_category');
            $table->string('childa_text')->nullable();
            $table->tinyInteger('childb_category');
            $table->string('childb_text')->nullable();
            $table->tinyInteger('childc_category');
            $table->string('childc_text')->nullable();
            $table->text('absorption')->nullable();
            $table->text('distribution')->nullable();
            $table->text('metabolisme')->nullable();
            $table->text('elimination')->nullable();
            $table->text('official')->nullable();
            $table->text('litterature')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();

            $table->foreign('article_id')->references('id')->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drugs');
    }
}
