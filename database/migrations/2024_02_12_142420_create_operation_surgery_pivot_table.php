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
        Schema::create('operation_surgery', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Operation::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Surgery::class)->constrained()->cascadeOnDelete();
            $table->unsignedInteger('amount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operation_surgery');
    }
};
