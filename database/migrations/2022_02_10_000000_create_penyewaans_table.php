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
        Schema::create('penyewaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ruangan_id')->constrained('ruangans');
            $table->foreignId('user_id')->constrained('users');
            $table->string('nomorpemesan');
            $table->dateTimeTz('tanggalpemesanan');
            $table->dateTimeTz('checkin');
            $table->dateTimeTz('checkout');
            $table->foreignId('status_id')->constrained('status_pemesanans');
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
        Schema::dropIfExists('penyewaans');
    }
};
