<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states=[
            ['id'=>1,'name'=>'Bavaria'],
            ['id'=>2,'name'=>'Bremen'],
            ['id'=>3,'name'=>'Hamburg'],
            ['id'=>4,'name'=>'Hesse'],
            ['id'=>5,'name'=>'Saxony'],
        ];
        \App\Models\State::insert($states);
    }
}
