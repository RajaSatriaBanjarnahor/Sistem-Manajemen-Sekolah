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
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->string('email', 191)->unique();
            $table->enum('role', ['admin', 'guru', 'siswa'])->default('siswa');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('StudentID')->nullable();
            $table->integer('TeacherID')->nullable();
            $table->integer('AdminID')->nullable();
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
        Schema::dropIfExists('tbl_users');
    }
}
