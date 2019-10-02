<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_langs', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->char('lang',2);
            $table->timestamps();
            $table->string('name', 256)->nullable();
            $table->text('description')->nullable();
            $table->mediumText('text')->nullable();
            $table->string('meta_title',256)->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('img', 256)->nullable();
            $table->string('img_alt',256)->nullable();
            $table->primary(['id','lang'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_langs');
    }
}
