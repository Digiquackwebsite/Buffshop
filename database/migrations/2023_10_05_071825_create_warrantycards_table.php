<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarrantycardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warrantycards', function (Blueprint $table) {
            $table->id();
            $table->string('customername');
            $table->string('vehicalnumber');
            $table->string('vendorname');
            $table->string('brachcode');
            $table->string('email')->unique();
            $table->string('phonenumber');
            $table->string('chassinumber');
            $table->string('service');
            $table->string('frontimage');
            $table->string('backimage');
            $table->string('rightimage');
            $table->string('leftimage');
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('warrantycards');
    }
}
