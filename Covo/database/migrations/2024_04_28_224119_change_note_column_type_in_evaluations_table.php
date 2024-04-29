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
        Schema::table('evaluations', function (Blueprint $table) {
            Schema::table('evaluations', function (Blueprint $table) {
                $table->decimal('note', 5, 1)->change();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('evaluations', function (Blueprint $table) {
            Schema::table('evaluations', function (Blueprint $table) {
                $table->integer('note')->change();
            });
        });
    }
};
