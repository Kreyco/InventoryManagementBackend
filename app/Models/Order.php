<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const PRIORITY = [1 => 'low', 2 => 'moderate', 3 => 'medium', 4 => 'important', 5 => 'high'];

    public function products()
    {
        return $this->belongsToMany(\App\Models\Product::class)->withPivot(['quantity']);
    }
}
