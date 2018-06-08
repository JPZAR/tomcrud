<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('member_id')->unsigned();//unsigned means the id can't be negative
            $table->string('name');
            $table->timestamps();
        });
        /*//this new schema is to link the foreign key. Needs to be done after the creation of the table
        Schema::table('languages', function(Blueprint $table) {
            //reference the foreign key from this table and reference id of the other table
            $table->foreign('member_id')->references('id')->on('members');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*//drop the question_id foreign key
        Schema::table('languages', function(Blueprint $table) {
            $table->dropForeign('languages_member_id_foreign');//By default the name of the foreign key is
            // 1.name of db table 2.name of the column of this table and then 3. the word foreign
        });*/
        Schema::dropIfExists('languages');
    }
}
