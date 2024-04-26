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
        Schema::create('trajets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('villeD_id')->constrained('villes')->onDelete('cascade');
            $table->foreignId('villeA_id')->constrained('villes')->onDelete('cascade');
            $table->integer('place');
            $table->date('date');
            $table->time('heure');
            $table->decimal('prix');
            $table->enum('status', ['en attente', 'confirmer', 'rejeter'])->default('en attente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trajets');
    }
};
