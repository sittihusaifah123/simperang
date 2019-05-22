<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengajuandetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuandetails', function (Blueprint $table) {
            $table->integer('id_pengajuan')->unsigned();
            $table->text('barang');
            $table->text('jenis');
            $table->integer('jumlah');
            $table->double('harga');
            $table->double('total_harga');
            $table->text('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('id_pengajuan')->references('id')->on('pengajuans')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuandetails');
    }
}
