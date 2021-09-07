<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthAttribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_id',
        'auth_attribute_id',
        'value',
    ];

    function card(){

        return $this->belongsTo(Card::class);
    }

    function bankAttribute(){

        return $this->belongsTo(BankAttribute::class);
    }
}
