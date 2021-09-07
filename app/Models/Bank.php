<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'heading',
        'description',
        'logo',
        'url',
    ];


    public function bankAttribute()
    {
        return $this->hasMany(BankAttribute::class);
    }
}
