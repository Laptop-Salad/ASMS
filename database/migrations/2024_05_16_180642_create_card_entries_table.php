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
        Schema::create('card_entries', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Student::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->dateTime('time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_entries');
    }
};
