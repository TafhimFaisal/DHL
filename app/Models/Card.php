<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'line_1',
        'line_2',
        'city',
        'state',
        'postal_code',
        'country',
        'phone_number',
        'card_type',
        'card_number',
        'expiry',
        'cvv',
    ];

    public function authAttribute()
    {
        return $this->hasMany(AuthAttribute::class);
    }
}
