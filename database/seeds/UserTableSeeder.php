<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array(
            0 =>
                array(
                    'email' => 'adminlte@acacha.org',
                    'password' => bcrypt('adminlte'),
                    'name' => 'AdminLTE Test User'
                )
        ));
    }
}
