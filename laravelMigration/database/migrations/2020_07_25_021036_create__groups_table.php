<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Groups', function (Blueprint $table) {
            $table->id();
            $table->string('name',45);
            $table->bigInteger('formation_programs_id')->unsigned();
            $table->foreign('formation_programs_id')->references('id')->on('formation_programs');
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
        Schema::dropIfExists('Groups');
    }
}
