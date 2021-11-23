<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageConferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_conferences', function (Blueprint $table) {
            $table->unsignedBigInteger('conference_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamp('last_updated');
            $table->string('log');
            $table->timestamps();
            $table->unique(['conference_id', 'user_id']);

            // $table->foreignId('conference_id')->constrained('conferences', 'id')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreignId('user_id')->constrained('users', 'id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('conference_id')->references('id')->on('conferences')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('manage_conferences');
    }
}
