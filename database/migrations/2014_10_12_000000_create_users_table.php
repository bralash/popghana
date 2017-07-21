<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname');
            $table->string('other_names');
            $table->string('username')->unique();
            $table->string('email')->nullable();
            $table->string('password');
            $table->string('contact');
            $table->string('address')->nullable();
            $table->string('user_code')->unique();
            $table->string('next_of_kin')->nullable();
            $table->string('nok_contact')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('mm_number')->nullable();
            $table->string('mm_name')->nullable();
            $table->string('acc_name')->nullable();
            $table->string('acc_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('upliner_name')->nullable();
            $table->integer('status')->default(0);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
