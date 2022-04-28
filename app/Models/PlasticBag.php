<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlasticBag extends Model
{
    use HasFactory;
    protected $fillable=[
                    'product_id',
                    'length',
                    'width',
                    'height',
                    'weight',
                    'bag_thickness',
                    'base_type',
                    'quantity_per_item',
                    'quantity_per_tons',
                    'model',
                    'effects',
                    'material_type',
                    'material_color',
    ];
    public function product(){
        return $this->hasOne(Product::class);
    }
}
