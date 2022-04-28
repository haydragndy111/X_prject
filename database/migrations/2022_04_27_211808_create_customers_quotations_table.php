<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_quotations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('file_id')->references('id')->on('files')->onDelete('cascade')->onUpdate('cascade');
            $table->string('supplier_quotation_reference');
            $table->string('customer_document_reference');
            $table->string('status');
            $table->string('document_date');
            $table->string('customer_reference');
            $table->string('project_reference');
            $table->string('product_reference');
            $table->integer('qty');
            $table->integer('unit_price_vat_excluded');
            $table->string('unit_price_vat_included');
            $table->string('lead_time');
            $table->string('color_codes_pantone');
            $table->string('customer_design');
            $table->string('customer_comment');
            $table->string('rejected_quotation');
            $table->string('reason_for_rejection');
            $table->string('terms_and_conditions');
            $table->string('signed_customer_document');
            $table->string('availabe_design');
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
        Schema::dropIfExists('customers_quotations');
    }
}
