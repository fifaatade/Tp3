<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePosteForeignAdd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("listetudiant",function (Blueprint $table){
            $table->foreignId('users-id')
                ->nullable()
                ->constrained('users')
                ->onUpdate("cascade")
                ->onDelete("cascade");
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
