<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('governorate');
            $table->string('district');
            $table->bigInteger('piece_number');
            $table->bigInteger('basin_number');
            $table->bigInteger('sell_form_id')->unsigned();
            $table->foreign('sell_form_id')->references('id')->on('sell_forms')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
};
