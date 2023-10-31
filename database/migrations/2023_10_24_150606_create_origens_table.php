<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('origens', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('clientes_id')->constrained('clientes')->cascadeOnUpdate();
            $table->foreignId('tipodepago_id')->constrained('tipodepagos')->cascadeOnUpdate();
            $table->timestamps();
            $table->delete_at();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('origens');
    }
};
