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
        Schema::create('program_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('full_names');
            $table->string('surname');
            $table->string('cell_number');
            $table->string('id_number');
            $table->integer('age');
            $table->string('address');
            // File paths for documents (nullable until uploaded)
            $table->string('id_document')->nullable();
            $table->string('proof_of_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_registrations');
    }
};
