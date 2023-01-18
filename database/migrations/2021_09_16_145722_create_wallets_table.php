<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('pin')->nullable();
            $table->string('btc_address')->nullable();

            $table->integer('investment')->unsigned()->default('0');
            $table->integer('profit')->unsigned()->default('0');
            $table->integer('bonus')->unsigned()->default('0');
            $table->integer('ref_bonus')->unsigned()->default('0');
            $table->integer('balance')->unsigned()->default('0');
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
        Schema::dropIfExists('wallets');
    }
}
