<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderfulffillmentAssignAssembleUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderfulffillment_assign_assemble_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->index('order_id')->constrained('orders');
            $table->foreignId('user_id')->index('user_id')->constrained('orderfulfillment_users');
            $table->unsignedInteger('added_by')->nullable()->index();
            $table->enum('status',['pending','in progress','completed'])->default('pending');
            $table->softDeletes();
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('orderfulffillment_assign_assemble_users');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
