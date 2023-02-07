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
        Schema::create('officers', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('gaji');
            $table->enum('shift', ['Pagi', 'Sore', 'Malam']);
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->time('jam_kerja');
            $table->time('jam_pulang');
            $table->text('alamat');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('officers');
    }
};
