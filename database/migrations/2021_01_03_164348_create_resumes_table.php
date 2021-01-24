<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('email');
            $table->integer('phone');
            $table->string('profile_description');
            $table->foreignId('address_id')
                    ->constrained()
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
            $table->foreignId('social_link_id')
                    ->constrained()
                    ->cascadeOnUpdate()
                    ->cascadeOnDelete();
            $table->foreignId('education_id')
                    ->constrained()
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
            $table->foreignId('skill_id')
                    ->constrained()
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
            $table->foreignId('extra_qualification_id')
                    ->constrained()
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
            $table->foreignId('experience_id')
                    ->constrained()
                    ->cascadeOnDelete()
                    ->cascadeOnUpdate();
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
        Schema::dropIfExists('resumes');
    }
}
