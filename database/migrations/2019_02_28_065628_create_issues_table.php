<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->increments('id');

            $table->string('phone_number');
            $table->string('name');
            $table->unsignedInteger('employee_id');
            $table->text('issue');
            $table->string('organization')->nullable();
            $table->string('ver_1c')->nullable();
            $table->string('ver_platform')->nullable();
            $table->boolean('is_remote')->default(false);
            $table->boolean('is_client')->default(false);
            $table->string('image')->nullable();

            $table->foreign('employee_id')->references('id')->on('employees');
            
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
        Schema::dropIfExists('issues');
    }
}
