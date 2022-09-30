<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'customer_name',
        'customer_name',
        'customer_name',
        'receive_good',
        'address_receive_good',
        'note',
        'payment-status',
    ];

    public function orderDetails() {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }
}
