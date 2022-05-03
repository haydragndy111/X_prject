<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Supplier;
use App\Models\File;
use App\Models\Project;

class SupplierQuotation extends Model
{
    use HasFactory;
    protected $fillable=[
        'customer_id',
        'product_id',
        'file_id',
        'supplier_document_reference',
        'status',
        'document_date',
        'supplier_reference',
        'project_reference',
        'product_reference',
        'qty',
        'unit_price_vat_excluded',
        'unit_price_vat_included',
        'lead_time',
        'validity',
        'advance_payment',
        'tolerance',
        'supplier_comment',
        'supplier_invoice',
    ];
    public function file(){
        return $this->hasMany(File::class);
    }
    public function project(){
        return $this->belongsTo(Project::class);
    }
    public function supplier(){
        return $this->hasOne(Supplier::class);
    }
}
