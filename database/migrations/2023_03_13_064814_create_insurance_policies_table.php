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
        Schema::create('insurance_policies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('insurance_id');
            $table->string('company_name');
            $table->string('policy_name');
            $table->string('fund_option');
            $table->string('life_assured_name');
            $table->string('proposer_name');
            $table->string('nominee_name');

            $table->string('sum_assured');
            $table->string('policy_term')->nullable();
            $table->string('ppt');
            $table->string('premium_mode');
            $table->date('cheque_date');
            $table->string('applicatio_no');
            $table->decimal("premium_amount", 10, 2);
            $table->decimal("cheque_amount", 10, 2);
            $table->string('cheque_no');
            $table->date('drown_on');

            $table->timestamps();
            $table->foreign('insurance_id')->references('id')->on('insurances')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insurance_policies');
    }
};
