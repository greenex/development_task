<?php

use Illuminate\Database\Seeder;

class IncomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $incomes =[];
        for($i=0;$i<400;$i++){
            $incomes[]=['county_id'=>rand(1,10),'amount'=>rand(1000,10000)];
        }
        \App\Models\Income::insert($incomes);
    }
}
