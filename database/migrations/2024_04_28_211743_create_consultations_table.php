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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('pet_id')->nullable();
            $table->foreign('pet_id')->references('id')->on('pets')
            ->onDelete('set null');

            $table->unsignedBigInteger('vet_id')->nullable();
            $table->foreign('vet_id')->references('id')->on('vets')
            ->onDelete('set null');

            $table->date('the_date');

            $table->decimal('total_cost',12,2)->nullable(); // preço

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
