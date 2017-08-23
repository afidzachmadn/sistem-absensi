<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 100);
            $table->string('nik',100);
            $table->string('email', 100)->unique();
            $table->string('no_hp',100)->nullable();
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();
            $table->string('password', 500);
            $table->string('img_url', 100)->default('users.png');
            $table->string('role', 100)->default('user');
            

            
        });
    

        Schema::create('data_absensi', function (Blueprint $table) {
            $table->increments('no');
            $table->integer('id')->nullable();
            $table->string('nama', 100)->nullable();
            $table->string('nik',100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('no_hp',100)->nullable();
            $table->string('bagian',100)->nullable();
            $table->string('jabatan',100)->nullable();
           
            $table->string('alasan_absen',100)->nullable();
            $table->date('tanggal_mulai_absen')->nullable();
            $table->date('tanggal_berakhir_absen')->nullable();
            $table->string('bukti_upload_absen',100)->nullable();

            $table->string('status_konfirmasi',100)->nullable();
            $table->string('petugas_konfirmasi',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('users');
        Schema::drop('data_absensi');


    }
}
