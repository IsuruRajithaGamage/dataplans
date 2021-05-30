<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create30004000tsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('3000-4000ts', function (Blueprint $table) {
            $table->id();
            $table->string('provider',20);
            $table->integer('price');
            $table->string('day',20);
            $table->string('night',20);
            $table->string('activate',20);
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
        Schema::dropIfExists('3000-4000ts');
    }
}
