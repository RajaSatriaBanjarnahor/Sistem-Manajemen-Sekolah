<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_teachers', function (Blueprint $table) {
            $table->bigIncrements('TeacherID');
            $table->string('FirstName');
            $table->string('LastName');
            $table->date('DateofBirth');
            $table->string('Gender');
            $table->string('PhoneNumber');
            $table->string('SubjectTaught');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_teachers');
    }
}
