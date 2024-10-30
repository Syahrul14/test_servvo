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
        Schema::create('product_care', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gudang_id')->constrained('gudang')->onDelete('cascade');
            $table->string('customer_name', 100);
            $table->string('phone_number', 13);
            $table->decimal('latitude_pickup', 9, 6)->nullable()->default(null);
            $table->decimal('longitude_pickup', 9, 6)->nullable()->default(null);
            $table->dateTime('product_care_date');
            $table->integer('total')->default(0);
            $table->integer('payment_method')->default(0);
            $table->integer('payment_status')->default(0);
            $table->integer('product_care_type');
            $table->integer('product_care_status')->default(0);
            $table->integer('created_by')->default(1);
            $table->dateTime('pickup_at')->nullable();
            $table->integer('pickup_by')->nullable();
            $table->dateTime('delivered_at')->nullable();
            $table->integer('delivered_by')->nullable();
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
        Schema::dropIfExists('product_care');
    }
};
