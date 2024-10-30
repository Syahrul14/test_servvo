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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->integer('id_category_product')->default(0);
            $table->integer('id_sub_category_product');
            $table->integer('create_sn');
            $table->string('id_product', 20);
            $table->string('name', 40);
            $table->string('pno', 15);
            $table->integer('price_lama');
            $table->decimal('price', 8, 2);
            $table->integer('stock');
            $table->string('description', 255);
            $table->integer('min_qty');
            $table->float('weight');
            $table->integer('expired');
            $table->integer('warranty');
            $table->integer('expired_sni');
            $table->date('warranty_sni');
            $table->date('created_date');
            $table->integer('status');
            $table->float('panjang');
            $table->float('tinggi');
            $table->text('fire_rating');
            $table->text('media');
            $table->text('type'); 
            $table->text('kapasitas'); 
            $table->text('kelas_kebakaran'); 
            $table->text('tabung_silinder');
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
        Schema::dropIfExists('product');
    }
};
