<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable=[
        'supplier_Organization_Name',
        'supplier_Contact_Name',
        'supplier_Contact_Position',
        'supplie_Contact_Number',
        'supplier_Contact_Whatsaap',
        'email',
        'supplier_Contact_Name2',
        'supplier_Contact2_Position',
        'supplier_Contact2_Number',
        'supplier_Catelouge',
        'supplier_WebSite',
        'supplier_Fixed_Quotation1',
        'supplier_Fixed_Quotation2',
        'social_Media_Accounts',
        'vat_Number',
        'coutry',
        'city',
        'district',
        'street',
        'building_Number1',
        'secondary_Number',
        'postal_Code',
        'supplier_Attachment_CR',
        'supplier_VAT_Certificate',
        'user_Comments',
        'supplier_IBAN1',
        'supplier_IBAN2',
        'factory_Location',
        'office_Location',
        'supplier_type'
    ];
}
