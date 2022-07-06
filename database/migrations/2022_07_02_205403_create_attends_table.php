<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attends', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->integer('lesson_id');
            $table->date('date');
            $table->boolean('attend');
            $table->text('note');
            $table->timestamps();


            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onDelete('CASCADE');

            $table->foreign('lesson_id')
                ->references('id')
                ->on('lessons')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attends');
    }
};
