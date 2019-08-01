<?php
/**
 * Created by PhpStorm.
 * User: Salah
 * Date: 8/1/19
 * Time: 1:14 AM
 */

namespace App\Repositories;


use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class TaxRepository
{

    private function getStateBaseQuery(){
        return DB::table('states')
            ->join('counties','counties.state_id','=','states.id')
            ->join('incomes','incomes.county_id','=','counties.id');
    }

    /**
     * @return Builder
     */
    protected function getOverallCollectedTaxQuery(){
        return $this->getStateBaseQuery()
        ->select(
            DB::raw('SUM(incomes.amount*counties.tax_rate/100) as collected_tax')
        );
    }

    /**
     * @return Builder
     */
    protected function getAverageCollectedTaxQuery(){
        return $this->getStateBaseQuery()
            ->select(
                DB::raw('AVG(incomes.amount*counties.tax_rate/100) as avg_collected_tax')
            );
    }

    /**
     * @return Builder
     */
    protected function getAverageTaxRateQuery(){
        return $this->getStateBaseQuery()
            ->select(
                DB::raw('AVG(counties.tax_rate) as avg_tax_rate')
            );
    }

    /**
     * @return float
     */
    public function getOverallCollectedTax(){
        return $this->getOverallCollectedTaxQuery()->first()->collected_tax;
    }

    /**
     * @return float
     */
    public function getAverageTaxRate(){
        return $this->getAverageTaxRateQuery()->first()->avg_tax_rate;
    }

    /**
     * @return Collection
     */
    public function getOverallCollectedTaxPerState(){
        return $this->getOverallCollectedTaxQuery()
            ->addSelect('states.id as state_id')
            ->addSelect('states.name as state_name')
            ->groupBy('states.id')
            ->get();
    }

    /**
     * @return Collection
     */
    public function getAverageCollectedTaxPerState(){
        return $this->getAverageCollectedTaxQuery()
            ->addSelect('states.id as state_id')
            ->addSelect('states.name as state_name')
            ->groupBy('states.id')
            ->get();
    }

    /**
     * @return Collection
     */
    public function getAverageTaxRatePerState(){
        return $this->getAverageTaxRateQuery()
            ->addSelect('states.id as state_id')
            ->addSelect('states.name as state_name')
            ->groupBy('states.id')
            ->get();
    }



}