<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname');
            $table->string('email');
            $table->string('phone_number');
            $table->string('gender');
            $table->string('stream');
            $table->date('dob');
            $table->string('last_school');
            $table->string('admit_card');
            $table->string('mark_sheet');
            $table->string('photo_url');
            $table->string('fathers_name');
            $table->string('mothers_name');
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
        Schema::dropIfExists('application_requests');
    }
}
