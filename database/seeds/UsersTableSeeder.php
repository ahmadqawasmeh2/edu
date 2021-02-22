<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'fname' => 'Ahmad',
                'lname' => 'Qawasmeh',
                'email' => 'Ahmadqawasmeh@gmail.com',
                'password' => bcrypt('123456789'),
                'status' => '1',
                'role' => 'Admin',
                'email_verified_at' =>Carbon::now(),
                'braintree_id' => Carbon::now(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            )
        ));
    }
}
