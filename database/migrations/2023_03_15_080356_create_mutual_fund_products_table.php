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
        Schema::create('mutual_fund_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mutual_fund_id');
            $table->string('types');
            $table->string('company_name');
            $table->decimal('pro_amount', 10, 2);
            $table->date('cheque_date');
            $table->string('pdct_application_no');
            $table->string('cheque_no');
            $table->date('pay_cheque_date');
            $table->date('maturity_date');

            $table->string('bank_name');
            $table->string('bank_branch');
            $table->string('fdr_no');

            $table->foreign('mutual_fund_id')->references('id')->on('mutual_funds')->onDelete('cascade');
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
        Schema::dropIfExists('mutual_fund_products');
    }
};
