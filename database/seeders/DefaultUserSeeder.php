<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Default Some User Create Here

        User::create([

            'name'      => 'sadmin',
            'uname'     => 'sadmin',
            'email'     => 'sadmin@gmail.com',
            'cell'      => '8801711461547',
            'password'  => Hash::make('1234'),

        ]);

        User::create([

            'name'      => 'admin',
            'uname'     => 'admin',
            'email'     => 'admin@gmail.com',
            'cell'      => '88017114615471',
            'password'  => Hash::make('1234'),

        ]);

    }
}
