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
        Schema::create('tipodepagos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->integer('dias');
            $table->foreignId('pagos_id')->constrained('pagos')->cascadeOnUpdate();
            $table->timestamps();
            $table->delete_at();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipodepagos');
    }
};
