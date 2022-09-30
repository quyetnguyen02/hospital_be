<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'producer_id',
        'price',
        'promotional_price',
        'categories_id',
        'quatity',
        'discount_end_date',
        'description',
        'configuration_id',
        'status',
    ];

    public function producer() {
        return $this->belongsTo(Producer::class, 'producer_id', 'id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function configuration() {
        return $this->belongsTo(Configuration::class);
    }

    public function orderDetails() {
        return $this->hasMany(OrderDetail::class, 'product_id', 'id');
    }
}
