<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clients', function (Blueprint $table)
        {
            $table->bigIncrements('Id');
            $table->string('Name');
            $table->string('Email');
            $table->string('Password');
        });

        Schema::create('Admins', function (Blueprint $table)
        {
            $table->bigIncrements('Id')->start_from(0);
            $table->string('Status');
        });

        Schema::create('Rels', function(Blueprint $table)
        {
            $table->bigIncrements('Id');
        });
        
        Schema::create('Credits', function(Blueprint $table) {
            $table->bigIncrements('Id');
            $table->unsignedBigInteger('Rel_Id')->nullable();
            $table->unsignedBigInteger('Client_Id');
            $table->unsignedBigInteger('Admin_Id')->nullable();
            $table->date('Date');
            $table->mediumText('Description');
            $table->integer('Amount');
            $table->timestamps();
            $table->foreign('Rel_Id')->references('Id')->on('Rels');
            $table->foreign('Client_Id')->references('Id')->on('Clients');
            $table->foreign('Admin_Id')->references('Id')->on('Admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credits');
        Schema::dropIfExists('Clients');
        Schema::dropIfExists('Admins');
        Schema::dropIfExists('Rels');
    }
}
