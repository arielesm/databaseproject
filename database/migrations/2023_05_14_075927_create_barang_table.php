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
        Schema::create('viewbabsatu', function (Blueprint $table) {
            $table->id();
            $table->text('nama_berkas')->nullable();
            $table->text('judul_berkas')->nullable();
            $table->text('nama_pt')->nullable();
            $table->text('alamat_pt')->nullable();
            $table->text('izinop_text')->nullable();
            $table->text('izinop_file')->nullable();
            $table->text('statakreinst_text')->nullable();
            $table->text('statakreinst_file')->nullable();
            $table->text('namaptmitra')->nullable();
            $table->text('alamatptmitra')->nullable();
            $table->text('negaramitra')->nullable();
            $table->text('izinopmitra_text')->nullable();
            $table->text('izinopmitra_file')->nullable();
            $table->text('statakreinstmitra_text')->nullable();
            $table->text('statakreinstmitra_file')->nullable();
            $table->text('peringinter')->nullable();
            $table->text('namaprodipt_select')->nullable();
            $table->text('namaprodimitra_text')->nullable();
            $table->text('akreprodpt_select')->nullable();
            $table->text('akreprodmitra_text')->nullable();
            $table->text('sk_akprodpt_file')->nullable();
            $table->text('sk_akprodmitra_file')->nullable();
            $table->text('izopeprodipt_file')->nullable();
            $table->text('izopeprodimitra_file')->nullable();
            $table->text('proposalusul_file')->nullable();
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
        Schema::dropIfExists('barang');
    }
};
