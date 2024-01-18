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
        //
        Schema::table(
            'facturas',
            function (Blueprint $table) {
                $table->string('igv', 15)->nullable()->change();
            }
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table(
            'facturas',
            function (Blueprint $table) {
                $table->float('igv')->nullable()->change();
            }
        );
    }
};
