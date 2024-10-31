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
        Schema::create('data_pengembalian_mobils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('data_mobil_id')->nullable()->constrained();
            $table->foreignId('data_peminjaman_mobil_id')->nullable()->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->date('tanggal_pengembalian');
            $table->integer('durasi_hari');
            $table->decimal('total_biaya', 10, 2);
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
        Schema::dropIfExists('data_pengembalian_mobils');
    }
};
