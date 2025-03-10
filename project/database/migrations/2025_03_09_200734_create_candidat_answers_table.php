<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('candidat_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quiz_id')->constrained()->onDelete('cascade');
            $table->foreignId('candidat_id')->constrained()->onDelete('cascade');
            $table->foreignId('suggeste_answers_id')->nullable()->constrained('question_options')->onDelete('cascade');
            $table->integer('score')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidat_answers');
    }
}