<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembeli', function (Blueprint $table) {
            $table->increments('id_pembeli');
            $table->string('nama_pembeli');
            $table->string('alamat_pembeli');
            $table->date('tanggal_lahir_pembeli');
            $table->string('jenis_kelamin_pembeli');
            $table->string('no_identitas_pembeli');
            $table->string('no_hp_pembeli');
            $table->string('email_pembeli');
            $table->string('password_pembeli');
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
        Schema::dropIfExists('pembeli');
    }
}
