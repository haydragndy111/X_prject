<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorrugatedBox extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_id',
        'material_type',
        'material_color',
        'model',
        'box_length',
        'box_height',
        'box_width',
        'flat_box_height',
        'flat_box_width',
        'quantity_per_item',
        'solovan_layer',
        'merged_normal_paper',
        'finger_print_layer',
        'uv_layer',
        'coverage',
        'glue_points_number',
    ];
    public function product(){
        return $this->hasOne(Product::class);
    }
}
