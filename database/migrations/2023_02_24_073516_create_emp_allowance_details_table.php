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
        Schema::create('emp_allowance_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('emp_id')->unsigned();
            $table->foreignId('user_id')->unsigned();
            $table->unsignedBigInteger('head_id');
            $table->decimal('amount', 10, 2)->nullable();
            $table->timestamps();
            $table->foreign('emp_id')->on('employees')->references('id')->cascadeOnDelete();
            $table->foreign('user_id')->on('users')->references('id')->cascadeOnDelete();
            $table->foreign('head_id')->on('allowances')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emp_allowance_details');
    }
};
