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
    Schema::create('bmi_records', function (Blueprint $table) {
        $table->id('record_id');
        $table->foreignId('bmi_user_id')->constrained('bmi_users');
        $table->float('height');
        $table->float('weight');
        $table->float('bmi');
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
        Schema::dropIfExists('bmi_records');
    }
};
