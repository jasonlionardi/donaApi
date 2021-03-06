<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('no_regis_donor');
            $table->string('name');
            $table->string('username');
            $table->string('phone');
            $table->string('email')->unique();
            $table->date('date_of_birth');
            $table->char('gender');
            $table->char('blood_type');
            $table->char('rhesus');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
//            $table->string('role')->default('donor');
            // JANGAN PAKE DATA ROLE DI SINI, PAKE DATA DI TABLE ROLES
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
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
