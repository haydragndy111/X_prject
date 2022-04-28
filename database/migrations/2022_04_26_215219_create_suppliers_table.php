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
            $table->string('supplier_Reference');
            $table->string('supplier_Organization_Name');
            $table->string('supplier_Contact_Name');
            $table->string('supplier_Contact_Position');
            $table->string('supplier_Contact_Number');
            $table->string('supplier_Contact_Whatsaap');
            $table->string('email');
            $table->string('supplie_Contact_Name2');
            $table->string('supplier_Contact2_Position');
            $table->string('supplier_Contact2_Number');
            $table->string('supplier_Catelouge');
            $table->string('supplier_WebSite');
            $table->string('supplier_Fixed_Quotation1');
            $table->string('supplier_Fixed_Quotation2');
            $table->string('social_Media_Accounts');
            $table->string('vat_Number');
            $table->string('country');
            $table->string('city');
            $table->string('district');
            $table->string('street');
            $table->string('building_Number');
            $table->string('secondary_Number');
            $table->string('postal_Code');
            $table->string('supplier_Attachment_CR');
            $table->string('supplier_VAT_Certificate');
            $table->string('user_Comments');
            $table->string('supplier_IBAN1');
            $table->string('supplier_IBAN2');
            $table->string('factory_Location');
            $table->string('office_Location');
            $table->string('supplier_Type');
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
