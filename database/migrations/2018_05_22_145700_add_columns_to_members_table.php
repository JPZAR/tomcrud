<?php
/*JP Notes: If you want to create new columns in the existing table, you will need to run >>
    php artisan make:migration add_columns_to_members_table --table=members >> A new migration file is then created. Now you can
    add the columns you want in THIS file. After that run >> php artisan migrate and the changes will sync to the db
 *
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->string('name');
            $table->string('surname');
            $table->string('id_number')->unique();
            $table->string('mobile_number');
            $table->string('email');
            $table->date('date_of_birth');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('surname');
            $table->dropColumn('id_number')->unique();
            $table->dropColumn('mobile_number');
            $table->dropColumn('email');
            $table->dropColumn('date_of_birth');
        });
    }
}
