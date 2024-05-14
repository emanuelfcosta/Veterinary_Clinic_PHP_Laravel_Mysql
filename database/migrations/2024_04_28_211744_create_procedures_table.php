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
        Schema::create('procedures', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('consultation_id')->nullable();
            $table->foreign('consultation_id')->references('id')->on('consultations')
            ->onDelete('set null');


            $table->string('name');
            $table->decimal('price',12,2)->nullable(); // preço
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procedures');
    }
};
