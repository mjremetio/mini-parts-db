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
        Schema::create('part_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('part_id');
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('multiplier', 8, 3)->nullable();
            $table->boolean('is_static')->default(false);
            $table->timestamps();

            $table->foreign('part_id')->references('id')->on('parts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('part_prices');
    }
};
