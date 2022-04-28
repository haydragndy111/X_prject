<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier_quotations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('file_id')->references('id')->on('files')->onDelete('cascade')->onUpdate('cascade');
            $table->string('supplier_document_reference');
            $table->string('status');
            $table->string('document_date');
            $table->string('supplier_reference');
            $table->string('project_reference');
            $table->string('product_reference');
            $table->integer('qty');
            $table->integer('unit_price_vat_excluded');
            $table->string('unit_price_vat_included');
            $table->string('lead_time');
            $table->string('validity');
            $table->string('advance_payment');
            $table->string('tolerance');
            $table->string('supplier_comment');
            $table->string('supplier_invoice');
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
        Schema::dropIfExists('supplier_quotations');
    }
}
