<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->unique();

            $table->string('foto')->nullable();
            $table->string('nama')->nullable();
            $table->char('nik', 16)->nullable();
            $table->string('alamat')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();

            $table->string('nim')->nullable();
            $table->string('strata')->nullable();
            $table->string('jenis_ptn')->nullable();
            $table->string('ptn')->nullable();
            $table->string('prodi')->nullable();
            
            $table->string('akre_ptn')->nullable();
            $table->string('akre_prodi')->nullable();
            $table->string('ipk')->nullable();
            $table->string('ukt')->nullable();
            $table->string('pekerjaan_ortu')->nullable();
            $table->string('prestasi')->default(0)->nullable();
            
            $table->string('status')->default("Menunggu")->nullable();

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
        Schema::dropIfExists('mahasiswas');
    }
}
