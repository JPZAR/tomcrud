<?php
/*JP Notes: In order to create a new table 1st run >> php artisan make:migration create_members_table --create=members
The table would not be created as yet. Now, enter all the columns you want in this table in the migration php file (this file)
When you finished the code in this php file run >> php artisan migrate >> This will create the table with the columns in the database.
if you want to add columns to the table you will need to run >> php artisan make:migration add_columns_to_members_table --table=members
and this will create a NEW migration file. It's in this NEW file that you need to add your columns, NOT THIS ONE
*/

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::dropIfExists('members');
    }
}
