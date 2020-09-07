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
            $table->bigIncrements('id')->unsigned();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('ownership');
            $table->string('owners');
            $table->string('companysize');
            $table->string('contactperson');
            $table->string('contacts');
            $table->string('businessregno');
            $table->string('businessname');
            $table->string('businesscontact');
            $table->string('country');
            $table->string('businesstype');
            $table->string('businessline');
            $table->string('employeesize');
            $table->string('physicaladdress');
            $table->string('postaladdress');
            $table->string('district');
            $table->string('documents');
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
        Schema::dropIfExists('users');
    }
}
