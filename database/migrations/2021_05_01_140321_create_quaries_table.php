<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quaries', function (Blueprint $table) {
            $table->id();
            $table->longText('data')->nullable();
            $table->string('status')->nullable();;
            $table->integer('approved_by')->nullable();;
            $table->text('rejected_reason')->nullable();;
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
        Schema::dropIfExists('quaries');
    }
}
