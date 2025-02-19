<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


       DB::table('currencies')->delete();

       DB::table('currencies')->insert(array (
            0 =>
            array (
                'id' => 1,
                'icon' => 'fa fa-inr',
                'currency' => 'INR',
                'default' => 0,
                'created_at' => '2019-12-11 11:24:24',
                'updated_at' => '2020-02-08 17:45:15',
            ),
        ));


    }
}
