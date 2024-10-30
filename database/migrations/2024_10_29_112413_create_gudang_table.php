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
        Schema::create('gudang', function (Blueprint $table) {
            $table->id();
            $table->string('location', 255);
            $table->integer('created_by');
            $table->integer('status');
            $table->string('nama_perusahaan', 200);
            $table->text('alamat');
            $table->string('phone', 15);
            $table->string('email', 255);
            $table->integer('id_province');
            $table->integer('id_regencies');
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
        Schema::dropIfExists('gudang');
    }
};
