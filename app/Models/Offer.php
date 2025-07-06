<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Offer extends Model
{
    protected $fillable = ['name', 'payout'];

    public function clicks(): HasMany
    {
        return $this->hasMany(Click::class);
    }
}
