<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create15002000tsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('1500-2000ts', function (Blueprint $table) {
            $table->id();
            $table->string('provider');
            $table->integer('price');
            $table->string('day');
            $table->string('night');
            $table->string('activate');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('1500-2000ts');
    }
}
