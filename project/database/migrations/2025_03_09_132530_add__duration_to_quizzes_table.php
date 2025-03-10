<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        DB::statement("ALTER TABLE quizzes ADD COLUMN duration INTERVAL DEFAULT '5 minutes'");
    }

    public function down()
    {
        DB::statement("ALTER TABLE quizzes DROP COLUMN duration");
    }
};
