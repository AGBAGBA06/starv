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
        Schema::create('jadavenous', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('formation');
            $table->string('profession');
            $table->string('sexe');
            // $table->string('annee_provenance');
            $table->string('eglise_provenance');
            // $table->string('date_naiss');
            $table->integer('tel');
            $table->integer('telwathsap');
            $table->string('ministere');
            $table->string('baptise');
            $table->integer('status');
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
        Schema::dropIfExists('jadavenous');
    }
};
