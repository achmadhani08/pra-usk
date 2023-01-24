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
            $table->string('kode')->unique();
            $table->char('nis', 20)->nullable();
            $table->string('fullname');
            $table->string('username')->unique();
            $table->string('password');
            $table->text('photo')->nullable();
            $table->string('kelas')->nullable();
            $table->string('alamat')->nullable();
            $table->enum('verif', ['verified', 'unverified'])->default('unverified');
            $table->enum('role', ['admin', 'user']);
            $table->date('join_date');
            $table->date('terakhir_login')->nullable();
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
