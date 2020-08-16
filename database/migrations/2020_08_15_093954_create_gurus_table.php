<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_guru', 190);
            $table->string('nip_guru', 190);
            $table->mediumText('alamat_guru', 190);
            $table->string('tgl_lahir', 190);
            $table->string('no_hp_guru', 190);
            $table->string('jenis_kelamin', 190);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gurus');
    }
}
