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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('clave');
            $table->string('nombre');
            $table->string('l');
            $table->string('a');
            $table->string('b');
            $table->string('molinos');
            $table->string('sistema');
            $table->string('acabado');
            $table->string('brillo');
            $table->string('EXT54_II');
            $table->string('EXTBUSS_I');
            $table->string('EXT70_II');
            $table->string('EXT54_IV');
            $table->string('EXT54_V');
            $table->string('EXT54_I');
            $table->string('EXT_58');
            $table->string('EXT_40');
            $table->string('EXT54_III');
            $table->string('EXT54_VII');
            $table->string('EXT70_I');
            $table->string('EXTBUSS_II');
            $table->string('EXT54_VI');
            $table->string('EXT70_III');
            $table->string('EXT54_VIII');
            $table->string('EXT_26_I');
            $table->string('EXT_26_II');
            $table->string('MOLINO_1');
            $table->string('MOLINO_2');
            $table->string('MOLINO_3');
            $table->string('MOLINO_4');
            $table->string('MOLINO_5');
            $table->string('MOLINO_6');
            $table->string('MOLINO_7');
            $table->string('MOLINO_8');
            $table->string('MOLINO_9');
            $table->string('MOLINO_10');
            $table->string('MOLINO_11');
            $table->string('MOLINO_12');
            $table->string('MOLINO_13');
            $table->string('MOLINO_14');
            $table->string('MOLINO_15');
            $table->string('MOLINO_16');
            $table->string('MOLINO_1A');
            $table->string('MOLINO_3A');
            $table->string('MOLINO_4A');
            $table->string('CAL_EXT');
            $table->string('CAL_MOL');
            $table->string('CAL_MZ');
            $table->string('CAL_BOND');
            $table->string('CAL_CRIB');
            $table->string('mallas');
            $table->string('media');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
