<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;
use Nette\Utils\Strings;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pagos', function (Blueprint $table)
        {
            $table->id();
            $table->string('tipo');
            $table->date('fechapago');
            $table->foreignId('clientes_id')->constrained('clientes')->cascadeOnUpdate();
            $table->foreignId('tipodepago_id')->constrained('tipodepago')->cascadeOnUpdate();
            $table->foreignId('origen_id')->constrained('origen')->cascadeOnUpdate();
            $table->timestamps();
            $table->delete_at();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
