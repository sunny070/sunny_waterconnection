<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicationforms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('Application_No')->nullable;
            $table->Date('Application_date')->nullable;
            $table->String('Applicant_Name')->nullable;
            $table->Date('DOB')->nullable;
            $table->String('gender')->nullable;
            $table->String('Email')->nullable;
            $table->bigInteger('Contact_No')->nullable;
            $table->String('Relationship_Type')->nullable;
            $table->String('Relation_Name')->nullable;
            $table->String('Present_Address_Hno')->nullable;
            $table->String('Present_Address_Sub_locality1')->nullable;
            $table->String('Present_Address_Sub_locality2')->nullable;
            $table->String('Present_Address_Location')->nullable;
            $table->String('Present_Address_Sub_District')->nullable;
            $table->String('Present_Address_District')->nullable;
            $table->String('Present_Address_State')->nullable;
            $table->bigInteger('Present_Address_pin_code')->nullable;
            $table->String('present_Address_Country')->nullable;
            $table->String('Present_Address_Police_Station')->nullable;
            $table->String('Present_Address_Post_office')->nullable;
            $table->bigInteger('Permanent_Address_Hno')->nullable;
            $table->String('Permanent_Address_Sub_locality1')->nullable;
            $table->String('Permanent_Address_Sub_locality2')->nullable;
            $table->String('Permanent_Address_Location')->nullable;
            $table->String('Permanent_Address_Sub_District')->nullable;
            $table->String('Permanent_Address_District')->nullable;
            $table->String('Permanent_Address_State')->nullable;
            $table->bigInteger('Permanent_Address_pin_code')->nullable;
            $table->String('Permanent_Address_Country')->nullable;
            $table->String('Permanent_Address_Police_Station')->nullable;
            $table->String('Permanent_Address_Post_office')->nullable;
            $table->String('Education')->nullable;
            $table->String('Religion')->nullable;
            $table->String('Occupation')->nullable;
            $table->String('income')->nullable;
            $table->String('Remark')->nullable;
            $table->String('doc1')->nullable;
            $table->String('doc2')->nullable;
            $table->String('doc3')->nullable;

            $table->String('Remarks_from_ExecutiveEngineer')->nullable();
            $table->String('Remarks_from_JuniorEngineer')->nullable();
            $table->String('Remarks_from_SupritendentEngineer')->nullable();
            $table->String('Remarks_from_SectionClerk')->nullable();
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
        Schema::dropIfExists('applicationforms');
    }
}
