<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Click extends Model
{
    protected $fillable = ['click_id', 'offer_id', 'source_id', 'ip', 'user_agent'];

    public function offer(): BelongsTo
    {
        return $this->belongsTo(Offer::class);
    }

    public function source(): BelongsTo
    {
        return $this->belongsTo(Source::class);
    }

    public function conversion(): HasOne
    {
        return $this->hasOne(Conversion::class, 'click_id', 'click_id');
    }
}
