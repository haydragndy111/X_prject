<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $fillable=[
        'customer_reference',
        'customer_organization_name',
        'customer_brand_name',
        'customer_contact_name',
        'customer_contact_whatsaap',
        'customer_contact_number',
        'customer_contact_number2',
        'email',
        'website',
        'social_media_accounts',
        'vat_number',
        'country',
        'city',
        'district',
        'street',
        'building_number',
        'secondary_number',
        'postal_code',
        'customer_attachement_CR',
        'customer_VAT_certificate',
        'customer_brand_book',
        'customer_product_designs',
        'customer_current_products',
        'color_codes_pantone',
        'user_Comments',
        'status',
        'customer_IBAN',
    ];
}
