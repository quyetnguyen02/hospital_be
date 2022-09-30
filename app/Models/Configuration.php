<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Configuration extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'cpu',
        'gpu1',
        'gpu2',
        'rom',
        'ram',
        'slot_ram',
        'slot_rom',
        'auto_chip',
        'speakers',
        'camera',
        'microphone',
        'battery',
        'screen',
        'keyboard',
        'color',
        'surface_reatment',
        'weight',
        'operating_system',
        'ethermet',
        'wlan_bluetooth',
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
