<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('file_id')->references('id')->on('files')->onDelete('cascade')->onUpdate('cascade');
            $table->string('supplier_reference');
            $table->string('supplier_organization_name');
            $table->string('supplier_contact_name');
            $table->string('supplier_contact_position');
            $table->string('supplier_contact_number');
            $table->string('supplier_contact_whatsaap');
            $table->string('email');
            $table->string('supplie_contact_name2');
            $table->string('supplier_contact2_position');
            $table->string('supplier_contact2_number');
            $table->string('supplier_catelouge');
            $table->string('supplier_webSite');
            $table->string('supplier_fixed_quotation1');
            $table->string('supplier_fixed_quotation2');
            $table->string('social_media_accounts');
            $table->string('vat_number');
            $table->string('country');
            $table->string('city');
            $table->string('district');
            $table->string('street');
            $table->string('building_number');
            $table->string('secondary_number');
            $table->string('postal_code');
            $table->string('supplier_attachment_CR');
            $table->string('supplier_vat_certificate');
            $table->string('user_comments');
            $table->string('supplier_IBAN1');
            $table->string('supplier_IBAN2');
            $table->string('factory_location');
            $table->string('office_location');
            $table->string('supplier_type');
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
        Schema::dropIfExists('suppliers');
    }
}
