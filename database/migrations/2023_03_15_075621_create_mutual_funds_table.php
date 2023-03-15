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
        Schema::create('mutual_funds', function (Blueprint $table) {
            $table->id();
            $table->string('division_name');
            $table->string('branch_name');
            $table->string('manager_code');
            $table->string('staff_code');
            $table->string('telecallar_code');
            $table->date('ins_date');
            $table->string('ack_no');

            $table->string('name');
            $table->string('address')->nullable();
            $table->string('tel_no')->nullable();
            $table->string('mob_no');
            $table->string('email');

            $table->string('sub_broker_name')->nullable();
            $table->string('code_no')->nullable();

            $table->string('pan_card_no')->nullable();
            $table->string('kyc_form')->nullable();
            $table->string('other')->nullable();
            $table->string('client_signature');
            $table->string('stuff_signature');
            $table->string('mutual_date');
            $table->tinyInteger('status')->default(1)->comment("1=>active && 0=>Inactive");
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
        Schema::dropIfExists('mutual_funds');
    }
};
