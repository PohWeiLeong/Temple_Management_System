<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempleCommitteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temple_committees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('temple');
            $table->string('location');
            $table->integer('electedTime');
            $table->integer('numberOfTimesElection');
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
        Schema::dropIfExists('temple_committees');
    }
}
