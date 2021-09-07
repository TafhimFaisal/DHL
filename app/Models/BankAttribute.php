<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAttribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'required',
    ];

    function bank(){

        return $this->belongsTo(Bank::class);
    }
}
