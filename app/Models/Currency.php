<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{

    use HasFactory;

    protected $table = 'currencies';

    protected $fillable = ['code'];


    public function country()
    {
        return $this->hasOne(Country::class, 'currency_id', 'id');
    }
}
