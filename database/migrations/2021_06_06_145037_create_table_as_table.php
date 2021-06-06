<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_as', function (Blueprint $table) {
            $table->id();
            $table->string("provider", 120);
            $table->integer('price');
            $table->string("day", 60);
            $table->string("night", 60);
            $table->string("activate", 160);
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
        Schema::dropIfExists('table_as');
    }
}
