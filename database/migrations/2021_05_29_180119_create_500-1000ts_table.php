<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create5001000tsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('500-1000ts', function (Blueprint $table) {
            $table->id();
            $table->string('provider'); //varchar(255)
            $table->srting('day');
            $table->string('night');
            $table->string('price');
            $table->string('activate');
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
        Schema::dropIfExists('500-1000ts');
    }
}
