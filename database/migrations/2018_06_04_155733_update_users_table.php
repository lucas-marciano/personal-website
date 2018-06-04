<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('description')->after('name');
            $table->string('phone')->after('description');
            $table->string('photo')->after('phone');
            $table->string('adress')->after('phone');

            $table->string('facebook')->after('adress');
            $table->string('linkedIn')->after('facebook');
            $table->string('twitter')->after('linkedIn');
            $table->string('gitHub')->after('twitter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('phone');
            $table->dropColumn('photo');
            $table->dropColumn('adress');
            $table->dropColumn('facebook');
            $table->dropColumn('linkedIn');
            $table->dropColumn('twitter');
            $table->dropColumn('gitHub');
        });
    }
}
