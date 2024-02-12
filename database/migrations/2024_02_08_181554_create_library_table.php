<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('library', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('sid');
            // $table->foreign('sid')->references('id')
            //       ->on('students')->onUpdate('cascade')
            //       ->onDelete('cascade');

            $table->foreignId('student_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();

            $table->string('book');
            $table->date('due_date')->nullable;
            $table->boolean('status');
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('library');
    }
};
