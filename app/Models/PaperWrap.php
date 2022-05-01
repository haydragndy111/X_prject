<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperWrap extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_id',
        'width',
        'height',
        'metrial_type',
        'metrial_color',
        'paper_thickness',
        'quantity_per_item',
        'item_weight',
        'pe_layer',
        'merged_layer_thickness',
    ];
    public function product(){
        return $this->hasOne(Product::class);
    }
}
