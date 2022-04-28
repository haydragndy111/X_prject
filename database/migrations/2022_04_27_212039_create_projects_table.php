<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('customer_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('suppliers_id')->references('id')->on('suppliers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('supplier_quotation_id')->references('id')->on('suppliers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('customers_quotation_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->string('product_reference');
            $table->string('product');
            $table->string('description');
            $table->string('Qty');
            $table->string('SP');
            $table->string('PP');
            $table->string('Supplier');
            $table->string('LeadTime');
            $table->string('supplier_contract_status');
            $table->string('supplier_contract_date');
            $table->string('supplier_PO_rate');
            $table->string('customer_comments');
            $table->string('supplier_comments');
            $table->string('tolerance');
            $table->string('suppier_quotation_validity');
            $table->string('product_design');
            $table->string('cliche_die_cut');
            $table->string('approved_customer_quotation');
            $table->string('reason_for_rejection');
            $table->string('supplier_quotation');
            $table->string('purchase_contract_reference');
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
        Schema::dropIfExists('projects');
    }
}
