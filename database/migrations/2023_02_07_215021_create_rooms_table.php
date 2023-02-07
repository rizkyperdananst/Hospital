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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('name_room_id')->constrained('name_rooms')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('class_room_id')->constrained('class_rooms')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('biaya', 100);
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
        Schema::dropIfExists('rooms');
    }
};
