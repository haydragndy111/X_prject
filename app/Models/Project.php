<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
