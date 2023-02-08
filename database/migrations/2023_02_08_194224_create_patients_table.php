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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('orang_tua', 50);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('usia', 10);
            $table->string('no_kontak', 13);
            $table->enum('agama', ['Islam', 'Protestan', 'Katolik', 'Hindu', 'Budha', 'Khonghucu']);
            $table->enum('status', ['Menikah', 'Belum Menikah']);
            $table->enum('pendidikan', ['SD', 'SMP', 'SMA', 'SMK', 'S1', 'S2', 'S3', 'Profesor']);
            $table->string('pekerjaan', 50);
            $table->foreignId('room_id')->constrained('rooms')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('class_room_id')->constrained('rooms')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('registration_id')->constrained('registrations')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('patients');
    }
};
