<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

class File extends Model
{
    use HasFactory;
    
    protected $fillable=['product_id','file','extenstion'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function customer(){
        return $this->belongsTo(Customers::class);
    }
    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
    public function customerQuotation(){
        return $this->belongsTo(CustomersQuotation::class);
    }
    public function supplierQuotation(){
        return $this->belongsTo(SupplierQuotation::class);
    }
}
