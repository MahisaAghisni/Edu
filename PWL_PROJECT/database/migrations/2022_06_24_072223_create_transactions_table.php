<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained();
            $table->foreignId('arenas_id')->constrained();
            $table->string('invoice');
            $table->integer('sub_total');
            $table->string('nama');
            $table->date('date');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('status_transactions');
            $table->string('bukti_pembayaran')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
