<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrescriptionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patient_id');
            $table->unsignedBigInteger('doctor_id')->nullable();
            $table->string('food_allergies')->nullable();
            $table->string('add_symptoms',1000)->nullable();
            $table->string('medicines')->nullable();
            $table->string('medicines_dose')->nullable();
            $table->string('ayurvedic_diagnosis')->nullable();
            $table->string('modern_diagnosis')->nullable();
            $table->string('treatment_time')->nullable();
            $table->string('treatment_suggestions')->nullable();
            $table->string('diet_chart_settings')->nullable();
            $table->string('medicines_quantity')->nullable();
            $table->string('tendency_bleed')->nullable();
            $table->string('heart_disease')->nullable();
            $table->string('high_blood_pressure')->nullable();
            $table->string('diabetic')->nullable();
            $table->string('surgery')->nullable();
            $table->string('accident')->nullable();
            $table->string('others')->nullable();
            $table->string('medical_history')->nullable();
            $table->string('current_medication')->nullable();
            $table->string('female_pregnancy')->nullable();
            $table->string('breast_feeding')->nullable();
            $table->string('health_insurance')->nullable();
            $table->string('low_income')->nullable();
            $table->string('reference')->nullable();
            $table->boolean('status')->nullable();
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('doctor_id')->references('id')->on('doctors')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('prescriptions');
    }
}
