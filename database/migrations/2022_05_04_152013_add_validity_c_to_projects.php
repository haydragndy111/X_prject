<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddValidityCToProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('validity_c');
            $table->string('validity_s');
			$table->string('leadtime_c');
            $table->string('leadtime_s');
			$table->string('delivery_handling_c');
            $table->string('delivery_handling_s');
			$table->string('advance_payment_c');
            $table->string('advance_payment_s');
			$table->string('tolerance_c');
            $table->string('tolerance_s');
			$table->string('printing_cost_c');
            $table->string('printing_cost_s');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            //
        });
    }
}
