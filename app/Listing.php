<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Listing extends Model
{
    use Searchable;

    protected $fillable = [
        'address',
        'address_2',
        'zipcode',
        'state',
        'description',
        'contract_type',
        'year_built',
        'sqft',
        'beds',
        'baths',
        'price',
        'city_id',
        'listing_type_id',
        'user_id'
    ];

    public function toSearchableArray()
    {
        return [
            'address' => $this->address,
            'address_2' => $this->address_2,
            'zipcode' => $this->zipcode,
        ];
    }

}
