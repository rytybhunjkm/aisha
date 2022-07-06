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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('brithday');
            $table->string('phone');
            $table->enum('type', ['normal', 'dense']);
            $table->text('note')->nullable();
            $table->unsignedBigInteger('attend_id');
            $table->timestamps();

            $table->foreign('attend_id')
                ->references('id')
                ->on('attends')
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
        Schema::dropIfExists('students');
    }
};
