<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SosWithoutHandleBag extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_id',
        'base_width',
        'base_height',
        'bag_height',
        'quantity_per_item',
        'quantity_per_tons',
        'paper_thickness',
        'print_type',
        'pe_layer',
        'pe_layer_thickness',
        'material_color',
        'material_type',
        'effects',
    ];
    public function product(){
        return $this->hasOne(Product::class);
    }
}
