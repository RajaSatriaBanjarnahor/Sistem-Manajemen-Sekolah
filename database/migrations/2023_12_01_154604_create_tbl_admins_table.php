<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_admins', function (Blueprint $table) {
            $table->bigIncrements('AdminID');
            $table->string('FirstName');
            $table->string('LastName');
            $table->date('DateofBirth');
            $table->string('Gender');
            $table->string('PhoneNumber');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_admins');
    }
}
