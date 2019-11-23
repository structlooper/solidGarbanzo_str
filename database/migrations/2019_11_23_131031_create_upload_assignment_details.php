<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadAssignmentDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_assignment_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Assignment_no');
            $table->string('Assignment_Details');
            $table->string('Semester');
            $table->string('Deadline');
            $table->mediumText('file');
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
        Schema::dropIfExists('upload_assignment_details');
    }
}
