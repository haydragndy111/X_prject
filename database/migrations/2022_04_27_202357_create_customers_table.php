<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('file_id')->references('id')->on('files')->onDelete('cascade')->onUpdate('cascade');
            $table->string('customer_reference');
            $table->string('customer_organization_name');
            $table->string('customer_brand_name');
            $table->string('customer_contact_name');
            $table->string('customer_contact_whatsaap');
            $table->string('customer_contact_number');
            $table->string('customer_contact_number2');
            $table->string('email');
            $table->string('website');
            $table->string('social_media_accounts');
            $table->string('vat_number');
            $table->string('country');
            $table->string('city');
            $table->string('district');
            $table->string('street');
            $table->string('building_number');
            $table->string('secondary_number');
            $table->string('postal_code');
            $table->string('customer_attachement_CR');
            $table->string('customer_VAT_certificate');
            $table->string('customer_brand_book');
            $table->string('customer_product_designs');
            $table->string('customer_current_products');
            $table->string('color_codes_pantone');
            $table->string('user_Comments');
            $table->string('status');
            $table->string('customer_IBAN');
            $table->string('delivery_location');
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
        Schema::dropIfExists('customers');
    }
}
