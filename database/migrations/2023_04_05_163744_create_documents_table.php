<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('documents', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name', 50);
            $table->string('name_en', 50)->nullable();
            $table->string('file', 255)->unique();
            $table->string('file_en', 255)->nullable()->unique();
            $table->text('description', 1000);
            $table->text('description_en', 1000)->nullable();
            $table->string('type', 30);
            $table->string('type_en', 30)->nullable();
            $table->integer('size');
            $table->string('extension', 6);
            $table->unsignedBigInteger('student_id')->nullable();
            $table->foreign('student_id')->references('id')->on('students')->cascadeOnUpdate()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('documents');
    }

}
