<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('gender');
            $table->string('bloodGroup');
            $table->string('maritaStatus');
            $table->date('dob');
            $table->string('email');
            $table->string('phone');
            $table->string('officeEmail');
            $table->string('image')->default('avater.png');
            $table->string('employeeId')->nullable();
            $table->string('employeeType');
            $table->string('bankName')->nullable();
            $table->string('accountType')->nullable();
            $table->string('accountNumber')->nullable();
            $table->string('department');
            $table->string('designation');
            $table->integer('supervisorId');
            $table->integer('salary');
            $table->integer('medication')->nullable();
            $table->integer('annualLeaves');
            $table->integer('casualLeaves');
            $table->integer('medicalLeaves');
            $table->date('joiningDate');
            $table->string('isSupervisor');
            $table->text('presentAddrss');
            $table->text('parmanentAddress');
            $table->string('emergencyContactName');
            $table->string('emergencyContactRelation');
            $table->text('emergencyContactAddress');
            $table->string('emergencyContactphone');
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
        Schema::dropIfExists('employees');
    }
}
