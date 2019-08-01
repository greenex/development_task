<?php

namespace App\Models;

use App\Repositories\TaxRepository;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{

    /**
     * Get the counties for the state.
     */
    public function counties()
    {
        return $this->hasMany(County::class);
    }

    /**
     * Get the Country that owns the State.
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

}
