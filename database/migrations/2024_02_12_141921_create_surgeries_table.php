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
        Schema::create('surgeries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('basic_insurance_id')->constrained('insurances')->cascadeOnDelete();
            $table->foreignId('supp_insurance_id')->constrained('insurances')->cascadeOnDelete();
            $table->string('patient_name');
            $table->string('patient_national_code');
            $table->string('document_number');
            $table->text('description')->nullable();
            $table->date('surgeried_at');
            $table->date('released_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surgeries');
    }
};
