<?php

namespace App\Models;

use App\Repositories\CountryRepository;
use App\Repositories\CountyRepository;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{

    /**
     * Get the incomes for the County.
     */
    public function income()
    {
        return $this->hasMany(County::class);
    }

    /**
     * Get the State that owns the county.
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }

}
