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
    Schema::create('bmi_users', function (Blueprint $table) {
        $table->id('bmi_user_id');
        $table->string('name');
        $table->integer('age')->nullable();
        $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();
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
        Schema::dropIfExists('bmi_users');
    }
};
