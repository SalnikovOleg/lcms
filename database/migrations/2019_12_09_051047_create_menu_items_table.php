<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menutypes', function(Blueprint $table) {       
            $table->increments('id');
            $table->string('name',20);
        });

        Schema::create('menu_items', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('menutype_id');
            $table->char('lang',2);
            $table->integer('parent')->nullable();
            $table->tinyInteger('node')->nullable();
            $table->boolean('disabled')->default(false);
            $table->softDeletes();
            $table->string('name', 50)->nullable();
            $table->string('url', 256)->nullable();
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
        Schema::dropIfExists('menu_items');
    }
}
