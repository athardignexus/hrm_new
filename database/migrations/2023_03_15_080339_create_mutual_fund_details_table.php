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
        Schema::create('mutual_fund_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mutual_fund_id');
            $table->string('types');
            $table->string('scheme_name');

            $table->string('option');
            $table->decimal('amount', 10, 2);
            $table->string('follo_no');
            $table->string('application_no');
            $table->tinyInteger('no_of_units');
            $table->date('sip_start_date');
            $table->date('sip_end_date');
            $table->string('switch_from');
            $table->string('switch_to');

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
        Schema::dropIfExists('mutual_fund_details');
    }
};
