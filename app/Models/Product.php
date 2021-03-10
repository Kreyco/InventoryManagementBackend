<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;
use App\Scopes\StateScope;

class Product extends Model
{
    use HasFactory, Userstamps;

    const UNITS = ['kg', 'm', 'pc'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'code', 'sell_price', 'buy_price', 'unit', 'notes', 'supplier_id', 'state'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new StateScope);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
