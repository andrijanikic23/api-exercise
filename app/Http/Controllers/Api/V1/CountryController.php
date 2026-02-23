<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\CountryCollection;
use App\Http\Resources\V1\CountryResource;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        return new CountryCollection(Country::paginate());
    }

    public function store(Country $country)
    {
        return new CountryResource($country);
    }
}
