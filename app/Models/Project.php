<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\CustomersQuotation;
use App\Models\Customers;
use App\Models\SupplierQuotation;
use App\Models\Supplier;
use App\Models\Product;

class Project extends Model
{
    use HasFactory;
    protected $fillable=[
            'product_reference',
            'product',
            'description',
            'Qty',
            'SP',
            'PP',
            'Supplier',
            'LeadTime',
            'supplier_contract_status',
            'supplier_contract_date',
            'supplier_PO_rate',
            'customer_comments',
            'supplier_comments',
            'tolerance',
            'suppier_quotation_validity',
            'product_design',
            'cliche_die_cut',
            'approved_customer_quotation',
            'reason_for_rejection',
            'supplier_quotation',
            'purchase_contract_reference',
    ];
    public function product(){
        return $this->hasOne(Product::class);
    }
    public function customer(){
        return $this->hasOne(Customers::class);
    }
    public function supplier(){
        return $this->hasMany(Supplier::class);
    }
    public function customerQuotation(){
        return $this->hasMany(CustomersQuotation::class);
    }
    public function supplierQuotation(){
        return $this->hasMany(SupplierQuotation::class);
    }
}
