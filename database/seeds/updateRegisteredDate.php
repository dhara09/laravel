<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class updateRegisteredDate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registration')
        	->update(['registered_date' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        echo "seeder executed successfully \n";
    }
}