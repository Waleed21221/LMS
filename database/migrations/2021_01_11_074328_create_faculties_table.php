<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->nullable()->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('role')->default('teacher');
            $table->string('staff_code')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('contact_number');
            $table->softDeletes();

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
        Schema::dropIfExists('faculties');
    }
}
