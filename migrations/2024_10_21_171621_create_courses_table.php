<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->string('title');  // Course title
            $table->integer('credit_hrs');  // Credit hours
            $table->timestamps();  // created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
}

