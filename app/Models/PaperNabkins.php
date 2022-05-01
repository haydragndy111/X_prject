<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperNabkins extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_id',
        'width',
        'height',
        'metrial_color',
        'layer_number',
        'paper_thickness',
        'quantity_per_item',
        'sheets_per_packet',
    ];
    public function product(){
        return $this->hasOne(Product::class);
    }
}
