<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texts', function (Blueprint $table) {
            $table->integer('module_id');
            $table->integer('object_id');
            $table->char('lang',2);
            $table->string('name',256)->nullable();
            $table->string('title',256)->nullable();
            $table->text('description')->nullable();
            $table->mediumText('text')->nullable();
            $table->string('meta_title',256)->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('img', 256)->nullable();
            $table->string('img_alt',256)->nullable();
            $table->timestamps();
            $table->primary(['module_id','object_id','lang']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('texts');
    }
}
