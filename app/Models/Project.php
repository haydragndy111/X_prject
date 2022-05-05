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
    protected $fillable = [
        
        'customer_id',
        'suppliers_id',
        'product_id',
        'description',
        'Qty',
        'SP',
        'PP',
        'LeadTime',
        'tolerance',
        'suppier_quotation_validity',
        'product_design',
        'cliche_die_cut',
        'approved_customer_quotation',
        'reason_for_rejection',
        'supplier_quotation',
        'purchase_contract_reference',
        'supplier_contract_status',
        'supplier_contract_date',
        'supplier_PO_rate',
        'customer_comments',
        'supplier_comments',
        
        'validity_s',
        'leadtime_s',
        'delivery_handling_s',
        'advance_payment_s',
        'tolerance_s',
        'printing_cost_s',
        'validity_c',
        'leadtime_c',
        'delivery_handling_c',
        'advance_payment_c',
        'tolerance_c',
        'printing_cost_c',
        

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
