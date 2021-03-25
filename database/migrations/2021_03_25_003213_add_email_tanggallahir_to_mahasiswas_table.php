<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmailTanggallahirToMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mahasiswas', function (Blueprint $table) {
            $table->string('email')->after('No_Handphone');
            $table->date('tanggal_lahir')->after('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswas', function (Blueprint $table) {
            //
        });
    }
}
