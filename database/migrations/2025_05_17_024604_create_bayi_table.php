<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBayiTable extends Migration
{
    public function up()
    {
        Schema::create('babies', function (Blueprint $table) {
            $table->id();
            $table->string('nama_bayi');
            $table->string('nama_ibu');
            $table->string('nama_ayah');
            $table->string('alamat_lengkap');
            $table->date('tanggal_lahir');
            $table->date('tanggal_mengisi')->default(now());
            $table->integer('nilai_total')->default(0);
            $table->string('status')->default('Normal');
            $table->json('jawaban_kuisioner')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bayi');
    }
}
