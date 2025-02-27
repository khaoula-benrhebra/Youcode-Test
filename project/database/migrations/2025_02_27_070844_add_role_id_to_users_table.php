<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->unsignedBigInteger('role_id')->nullable();
        $table->string('first_name')->after('id');
        $table->string('last_name')->after('first_name');
        
        if (Schema::hasColumn('users', 'name')) {
            $table->dropColumn('name');
        }
        
        $table->foreign('role_id')->references('id')->on('roles');
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropForeign(['role_id']);
        $table->dropColumn('role_id');
        $table->dropColumn('first_name');
        $table->dropColumn('last_name');
        $table->string('name');
    });
}
}
