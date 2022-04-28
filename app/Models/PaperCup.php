<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperCup extends Model
{
    use HasFactory;
    protected $fillabe=['product_id',
                        'size',
                        'model',
                        'material_type',
                        'material_color',
                        'quantity_per_item',
                        'effects'
                        ];
    public function product(){
        return $this->hasOne(Product::class);
    }
}
