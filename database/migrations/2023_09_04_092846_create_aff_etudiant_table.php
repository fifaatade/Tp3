<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffEtudiantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aff_etudiant', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_etudiant')
            ->nullable()
            ->constrained('listetudiant')
            ->onUpdate("cascade")
            ->onDelete("cascade");
            $table->foreignId('id_cours')
            ->nullable()
            ->constrained('cours')
            ->onUpdate("cascade")
            ->onDelete("cascade");
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
        Schema::dropIfExists('aff_etudiant');
    }
}
