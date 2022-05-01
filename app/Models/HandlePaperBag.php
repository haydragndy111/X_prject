<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HandlePaperBag extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_id',
    
        'material_colors',
        'paper_thickness',
        
        'base_width',
        'base_height',
        'print_type',
        'effects',
        'quantity_per_item',
        'quantity_per_tons',
    ];
    public function product(){
        return $this->hasOne(Product::class);
    }
}
