<?php

use Illuminate\Database\Seeder;

class CountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $counties = [
            ['id'=>1,'state_id'=>1,'name'=>'Aichach-Friedberg','tax_rate'=>10],
            ['id'=>2,'state_id'=>1,'name'=>'Altötting','tax_rate'=>11],

            ['id'=>3,'state_id'=>2,'name'=>'Bremen','tax_rate'=>10],
            ['id'=>4,'state_id'=>2,'name'=>'Bremerhaven','tax_rate'=>12],

            ['id'=>5,'state_id'=>3,'name'=>'Hamburg','tax_rate'=>15],

            ['id'=>6,'state_id'=>4,'name'=>'Bergstraße','tax_rate'=>20],
            ['id'=>7,'state_id'=>4,'name'=>'Darmstadt','tax_rate'=>18],
            ['id'=>8,'state_id'=>4,'name'=>'Fulda','tax_rate'=>17],
            ['id'=>9,'state_id'=>4,'name'=>'Gießen','tax_rate'=>15],

            ['id'=>10,'state_id'=>5,'name'=>'Bautzen','tax_rate'=>14],
        ];
        \App\Models\County::insert($counties);
    }
}

