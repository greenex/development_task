<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Repositories\TaxRepository;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;


class Controller extends BaseController
{

    public function getIndex()
    {
        $repository = new TaxRepository();
        $collectedAmountPerState        = $repository->getOverallCollectedTaxPerState();
        $averageCollectedAmountPerState = $repository->getAverageCollectedTaxPerState();
        $averageTaxRatePerState         = $repository->getAverageTaxRatePerState();
        $averageTaxRate                 = $repository->getAverageTaxRate();
        $overallCollectedAmount         = $repository->getOverallCollectedTax();

        return view('index', compact(
    'collectedAmountPerState',
          'averageCollectedAmountPerState',
             'averageTaxRatePerState',
             'averageTaxRate',
             'overallCollectedAmount'
        ));
    }

}
