<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public function categories() {
        return $this->belongsToMany(Category::class, 'producer_categories');
    }

    public function products() {
        return $this->hasMany(Product::class, 'producer_id', 'id');
    }
}
