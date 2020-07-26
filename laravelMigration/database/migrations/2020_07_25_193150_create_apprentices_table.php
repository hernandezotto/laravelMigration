<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprentices', function (Blueprint $table) {
            $table->id();
            $table->string('names',50);
            $table->string('lastnames',50);
            $table->string('email',100);
            $table->string('document',25);
            $table->date('edad');
            $table->bigInteger('formation_programs_id')->unsigned();
            $table->bigInteger('groups_id')->unsigned();
            $table->bigInteger('genders_id')->unsigned();
            $table->bigInteger('document_types_id')->unsigned();
            $table->foreign('formation_programs_id')->references('id')->on('formation_programs');
            $table->foreign('groups_id')->references('id')->on('groups');
            $table->foreign('genders_id')->references('id')->on('groups');
            $table->foreign('document_types_id')->references('id')->on('groups');
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
        Schema::dropIfExists('apprentices');
    }
}
