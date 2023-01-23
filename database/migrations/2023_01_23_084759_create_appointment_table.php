<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->nullable()->index('fk_appointment_to_doctors');
            $table->foreignId('user_id')->nullable()->index('fk_appointment_to_users');
            $table->foreignId('consultation_id')->nullable()->index('fk_appointment_to_consultations');
            $table->enum('level',[0,1,2,3,4,5,6,7,8,9,10]);
            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->enum('status',[0,1]);
            $table->timestamps();
            $table->softDeletes();
            /*
            Level 0 Auditor
            Level 1 Magang
            level 2 Staf
            level 3 Kasubag
            level 4 Kabag
            level 5 Ka Unit
            level 6 Ka Markas
            level 7 Sekretaris Pengurus
            level 8 Pengurus Bidang
            level 9 Ketua dan Wakil Pengurus
            level 10 Adminitrators
            */


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment');
    }
};
