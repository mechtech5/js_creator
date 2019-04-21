<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cust_mast', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('cust_name', 100);
            $table->string('cust_type_id', 1);
            $table->string('comp_name', 100);
            $table->string('cont_pers', 100);
            $table->char('gender', 1);
            $table->date('dob');
            $table->string('mobile', 15);
            $table->string('mobile1', 15);
            $table->string('fax', 15);
            $table->string('tele', 15);
            $table->string('email', 100);
            $table->string('cust_addr', 100);
            $table->string('zip', 6);
            $table->string('city_code', 11);
            $table->string('state_code', 11);
            $table->string('country_code', 11);
            $table->string('pan_no', 20);
            $table->string('gst', 30);
            $table->string('adhaar_no', 30);
            $table->string('cust_status', 1);
            $table->string('cust_source', 1);
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
        Schema::dropIfExists('cust_mast');
    }
}
