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

        Schema::create('land_reservations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('land_card_id')->unsigned();
            $table->foreign('land_card_id')->references('id')->on('land_cards')->onDelete('cascade')->onUpdate('cascade');
            $table->string('status')->nullable();
            $table->date('reservation_date');
            $table->string('available_land_message')->nullable();
            $table->string('sold_land_message')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('land_reservation');
    }
};
