<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nom', 50);
            $table->string('adresse', 70);
            $table->string('phone', 20)->unique();
            $table->string('email', 60)->unique();
            $table->date('naissance');
            $table->integer('ville_id')->foreign()->references('id')->on('villes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('etudiants');
    }

}