<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlasticCups extends Model
{
    use HasFactory;
    protected $fillable=[
                        'product_id',
                        'width',
                        'height',
                        'length',
                        'model',
                        'quantity_per_item',
                        'effects',
                ];
    public function product(){
        return $this->hasOne(Product::class);
    }
}
