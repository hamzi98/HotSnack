<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllOrder extends Model
{
    use HasFactory;

    protected $fillable=[
        'count',
        'user_id',
        'total',
        'product_id',
        'location',
        'number_order',
        ' created_at',
        'note'
    ];
    public function product(){
        return $this->belongsTo(product::class);
    }
}
