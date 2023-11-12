<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('land_cards', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('land_type');
            $table->string('price');
            $table->string('governorate');
            $table->string('district');
            $table->string('area');
            $table->bigInteger('sell_form_id')->unsigned()->nullable();
            $table->foreign('sell_form_id')->references('id')->on('sell_forms')->onDelete('cascade')->onUpdate('cascade');
            $table->tinyInteger('status_from_user');
            $table->tinyInteger('status_from_admin');
            // $table->text('description');
            // $table->text('additional_information');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('land_cards');
    }
};
