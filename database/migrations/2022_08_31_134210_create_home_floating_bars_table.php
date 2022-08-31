<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeFloatingBarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_floating_bars', function (Blueprint $table) {
            $table->id();
            $table->string('order_request_url');
            $table->string('customer_service_url');
            $table->string('pay_invoice_credit_url');
            $table->string('pay_invoice_cash_url');
            //$table->string('pqrs_url');
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
        Schema::dropIfExists('home_floating_bars');
    }
}
