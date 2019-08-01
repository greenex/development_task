<?php

namespace App\Models;

use App\Repositories\IncomeRepository;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{

    /**
     * Get the county that owns the income.
     */
    public function county()
    {
        return $this->belongsTo(County::class);
    }

}
