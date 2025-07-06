<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Conversion extends Model
{
    protected $fillable = ['click_id', 'status', 'revenue'];

    public function click(): BelongsTo
    {
        return $this->belongsTo(Click::class, 'click_id', 'click_id');
    }
}
