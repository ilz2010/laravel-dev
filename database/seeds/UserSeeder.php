<?php

use App\User;
use App\Interfaces\TS;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends TS
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'login' =>  'admin',
            'password'  =>  Hash::make('password'),

            'fio'   =>  'Барыкин Илья Игоревич',
            'phone' =>  '+7 (917) 00-00-000',

            'theatre_id' => '0'
        ]);

        User::create([
            'login' =>  'th1_admin',
            'password'  =>  Hash::make('password'),

            'fio'   =>  'THEATRE 1 ADMIN FIO',
            'phone' =>  'THEATRE 1 ADMIN PHONE',

            'theatre_id' => '1'
        ]);

        User::create([
            'login' =>  'th1_user1',
            'password'  =>  Hash::make('password'),

            'fio'   =>  'THEATRE 1 USER 1 FIO',
            'phone' =>  'THEATRE 1 USER 1 PHONE',

            'theatre_id' => '1'
        ]);

        User::create([
            'login' =>  'th1_user2',
            'password'  =>  Hash::make('password'),

            'fio'   =>  'THEATRE 1 USER 2 FIO',
            'phone' =>  'THEATRE 1 USER 2 PHONE',

            'theatre_id' => '1'
        ]);
    }
}
