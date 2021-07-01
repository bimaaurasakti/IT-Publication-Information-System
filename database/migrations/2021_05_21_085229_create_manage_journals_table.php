<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_journals', function (Blueprint $table) {
            $table->unsignedBigInteger('journal_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamp('last_updated');
            $table->string('log');
            $table->timestamps();
            $table->unique(['journal_id', 'user_id']);

            // $table->foreignId('journal_id')->constrained('journals', 'id')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreignId('user_id')->constrained('users', 'id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('journal_id')->references('id')->on('journals')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manage_journals');
    }
}
