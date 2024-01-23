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
        Schema::table('trains', function (Blueprint $table) {
            $table->renameColumn('Azienda', 'azienda');
            $table->renameColumn('Stazione_di_partenza', 'stazione_di_partenza');
            $table->renameColumn('stazione_di_arrivo', 'stazione_di_arrivo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            //
        });
    }
};
