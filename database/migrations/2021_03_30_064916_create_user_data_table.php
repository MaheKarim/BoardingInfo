<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->id();
            $table->string('traveler_name');
            $table->string('traveler_phn');
            $table->string('traveler_alt_phn')->nullable();
            $table->string('traveler_area');
            $table->string('traveler_cottage_name');
            $table->string('traveler_start_date');
            $table->string('traveler_end_date');
            $table->string('total_member');
            $table->string('total_bag');
            $table->unsignedBigInteger('user_id');
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('user_data');
    }
}
