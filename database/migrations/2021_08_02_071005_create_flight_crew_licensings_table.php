<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightCrewLicensingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_crew_licensings', function (Blueprint $table) {
            $table->id();
            $table->foreignid('user_id');
            $table->string('invoicing_fee');
            $table->string('nama');
            $table->string('lokasi');
            $table->string('task_name');
            $table->string('alamat');
            $table->string('status_pilot');
            $table->string('authority');
            $table->string('status_authority');
            $table->string('examiner');
            $table->string('remarks');
            $table->string('rules_checks');
            $table->string('verify_rule');
            $table->string('flight_experience');
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
        Schema::dropIfExists('flight_crew_licensings');
    }
}
