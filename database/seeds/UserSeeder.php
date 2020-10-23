<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'lname'    => 'Maraginot',
                'fname'    => 'Stephanie',
                'address'  => 'Pooc Oriental, Tubigon, Bohol',
                'phone'    => '0961.0974.197',
                'email'    => 'steph.maraginot@gmail.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname'    => 'Blake',
                'fname'    => 'Glenda',
                'address'  => 'Cabulijan, Tubigon, Bohol',
                'phone'    => '0946.2245.936',
                'email'    => 'glendablake@gmail.com',
                'password' => bcrypt('passwrd123')
            ],
            [
                'lname'    => 'Cook',
                'fname'    => 'Justine',
                'address'  => 'Guiwanon, Loon, Bohol',
                'phone'    => '0961.1936.197',
                'email'    => 'justine.cook@gmail.com',
                'password' => bcrypt('pasword123')
            ],
        ];
        foreach($data as $usr){
            \App\User::create($usr);
        }
    }
}

