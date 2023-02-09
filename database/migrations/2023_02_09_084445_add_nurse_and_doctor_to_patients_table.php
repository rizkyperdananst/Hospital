<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->foreignId('nurse_id')->constrained('nurses')
                ->onUpdate('cascade')
                ->onDelete('cascade')->nullable();
            $table->foreignId('doctor_id')->constrained('doctors')
                ->onUpdate('cascade')
                ->onDelete('cascade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('nurse_id');
            $table->dropColumn('doctor_id');
        });
    }
};
