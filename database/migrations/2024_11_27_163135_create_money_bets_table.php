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
        Schema::create('money_bets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->string('unique_id')->nullable();
            $table->string('league')->nullable();
            $table->string('total_score')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('team_1')->nullable();
            $table->string('team_2')->nullable();
            $table->string('combine_percentage')->nullable();
            $table->string('odds')->nullable();
            $table->text('url')->nullable();
            $table->enum('status', ['active', 'disabled'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('money_bets');
    }
};
