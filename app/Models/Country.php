<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    protected $fillable = ['name', 'code', 'capital', 'population', 'area', 'continent_id', 'currency_id'];


    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function continents()
    {
        return $this->belongsTo(Continent::class);
    }
}
