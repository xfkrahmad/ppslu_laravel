<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemConfiguration extends Model
{
    use HasFactory;

    protected $table = 'system_configurations';
    protected $guarded = ['id'];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function city()
    {
        return $this->hasOne(City::class, 'id', 'city_id');
    }

    public function province()
    {
        return $this->hasOne(Province::class, 'id', 'province_id');
    }
}
