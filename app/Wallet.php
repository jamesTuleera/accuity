<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Wallet extends Model
{
    protected $guarded = [];


    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
