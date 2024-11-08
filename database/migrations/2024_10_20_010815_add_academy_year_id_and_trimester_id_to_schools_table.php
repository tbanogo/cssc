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
        Schema::table('schools', function (Blueprint $table) {
            $table->foreignId('academy_year_id')
                ->nullable()
                ->constrained()
                ->onDelete('set null')
                ->onUpdate('set null');

            $table->foreignId('trimester_id')
                ->nullable()
                ->constrained()
                ->onDelete('set null')
                ->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('schools', function (Blueprint $table) {
            $table->dropForeign([
                'schools_academy_year_id_foreign',
                'schools_trimester_id_foreign'
            ]);

            $table->dropColumn([
                'academy_year_id',
                'trimester_id'
            ]);
        });
    }
};
