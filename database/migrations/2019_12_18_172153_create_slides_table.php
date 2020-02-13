<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->integer('slider_id');
            $table->char('lang',2);
            $table->timestamps();
            $table->string('img',256);
            $table->text('text')->nullable();
            $table->string('href',256)->nullable();
            $table->boolean('disabled')->default(false);
            $table->softDeletes();
            $table->primary(['slider_id','lang']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slides');
    }
}
