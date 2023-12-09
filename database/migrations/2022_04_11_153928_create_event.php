<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('image');
            $table->string('event_title');
            $table->string('organizer');
            $table->string('event_date');
            $table->string('event_time');
            $table->string('category');
            $table->string('place');
            $table->string('desc');
            $table->char('phone');
            $table->string('email');
            $table->string('ticket_link');
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
        Schema::dropIfExists('event');
    }
}
