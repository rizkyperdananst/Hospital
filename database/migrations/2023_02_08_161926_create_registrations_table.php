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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('no_registrasi', 50);
            $table->string('nama');
            $table->foreignId('officer_id')->constrained('officers')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('no_kontak', 13);
            $table->string('hubungan_dengan_pasien', 100);
            $table->date('tanggal_registrasi');
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
        Schema::dropIfExists('registrations');
    }
};
