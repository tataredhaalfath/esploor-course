<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->boolean('certificate');
            $table->string('thumbnail')->nullable();
            $table->enum('type', ['free', 'premium']);
            $table->enum('status', ['draft', 'published']);
            $table->integer('price')->default(0)->nullable();
            $table->enum('level', ['all-level', 'beginner', 'intermediate', 'advance']);
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('mentor_id');
            $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('courses');
    }
}
