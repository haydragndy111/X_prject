<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\SupplierQuotation;
use App\Models\File;
use App\Models\Project;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable=[
        'supplier_organization_name',
        'supplier_contact_name',
        'supplier_contact_position',
        'supplier_contact_number',
        'supplier_contact_whatsaap',
        'email',
        'supplier_contact_name2',
        'supplier_contact2_position',
        'supplier_contact2_number',
        'supplier_catelouge',
        'supplier_webSite',
        'supplier_fixed_quotation1',
        'supplier_fixed_quotation2',
        'social_media_accounts',
        'vat_number',
        'country',
        'city',
        'district',
        'street',
        'building_number',
        'secondary_number',
        'postal_code',
        'supplier_attatchment_CR',
        'supplier_VAT_certificate',
        'user_comments',
        'supplier_IBAN1',
        'supplier_IBAN2',
        'factory_location',
        'office_location',
        'supplier_type'
    ];
    public function file(){
        return $this->hasMany(File::class);
    }
    public function project(){
        return $this->belongsTo(Project::class);
    }
    public function supplierQuotation(){
        return $this->hasOne(SupplierQuotation::class);
    }
}
