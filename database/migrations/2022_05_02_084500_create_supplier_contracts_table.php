<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_contracts', function (Blueprint $table) {
            $table->id();
			$table->string('validity');
			$table->string('leadtime');
			$table->string('delivery_handling');
			$table->string('advance_payment');
			$table->string('tolerance');
			$table->string('printing_cost');
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
        Schema::dropIfExists('supplier_contracts');
    }
}
