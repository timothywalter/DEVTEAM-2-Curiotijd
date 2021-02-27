<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasklistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasklist', function (Blueprint $table) {
            $table->id();
            $table->foreignId('studentid')->nullable()->index();
            $table->datetime('deadline');
            $table->text('status');
            $table->timestamps();

            $table->foreign('studentid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasklist');
    }
}
