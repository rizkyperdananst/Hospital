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
        Schema::create('payment_invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('officer_id')->constrained('officers')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('poly_id')->constrained('polies')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('drug_id')->constrained('durgs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('name_room_id')->constrained('name_rooms')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('class_room_id')->constrained('class_rooms')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('doctor_id')->constrained('doctors')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->date('tanggal_faktur');
            $table->string('total_bayar')->nullable();
            $table->text('keterangan');
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
        Schema::dropIfExists('payment_invoices');
    }
};
