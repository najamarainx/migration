<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderfulfillmentPaymentLogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderfulfillment_payment_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->index('order_id')->constrained('orders');
            $table->decimal('paid_amount',10,2)->nullable();
            $table->unsignedInteger('added_by')->nullable()->index();
            $table->tinyInteger('is_verified')->default(0);
            $table->enum('payment_type',['cash','company_account','personal_account'])->default('company_account');
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
        Schema::dropIfExists('orderfulfillment_payment_logs');
    }
}
