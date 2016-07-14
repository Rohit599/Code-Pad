<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompilerProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('program_name');
            $table->text('program_statement');
            $table->text('sample_input')->nullable();
            $table->text('sample_output')->nullable();
            $table->text('testcases_input');
            $table->text('testcases_output');
            $table->string('record_id');
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
        Schema::drop('program_details');
    }
}
