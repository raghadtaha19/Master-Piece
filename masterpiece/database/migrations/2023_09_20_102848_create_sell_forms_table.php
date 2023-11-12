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

        Schema::create('sell_forms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ID_number');
            $table->string('land_type');
            $table->string('governorate');
            $table->string('directorate');
            $table->string('village');
            $table->string('basin');
            $table->string('district');
            $table->string('piece_number');
            $table->bigInteger('area');
            $table->bigInteger('price');
            $table->text('description');
            $table->text('additional_information');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->string('status')->default('pending');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sell_forms');
    }
};
