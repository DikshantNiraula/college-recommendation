<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegeCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('college_id');
            $table->string('title');
            $table->text('course_detail')->nullable();
            $table->decimal('price', 8, 2);
            $table->integer('seats_available')->nullable();
            $table->string('course_time_year')->nullable();
            $table->string('qualification')->nullable();
            $table->string('image')->nullable();

            $table->foreign('college_id')->references('id')->on('colleges')->onDelete('cascade');
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
        Schema::dropIfExists('college_courses');
    }
}
