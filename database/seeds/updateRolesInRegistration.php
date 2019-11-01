<?php

use Illuminate\Database\Seeder;

class updateRolesInRegistration extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('registration')
	        ->update([
	        	'role_of_users' =>'Developer',
	        ]);
	        
        echo "Seeder Executed Successfully";
    }
}
