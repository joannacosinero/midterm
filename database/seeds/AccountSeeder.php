<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
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
                'user_id'     => 1,
                'acct_name'   => 'Maraginot S. Regular Account',
                'init_invest' => 44000,
                'start_date'  => '2020-10-03',
                'remarks'     => 'Done with the transaction'
            ],
            [
                'user_id'     => 2,
                'acct_name'   => 'Blake G. Regular Account',
                'init_invest' => 28000,
                'start_date'  => '2020-12-20',
                'remarks'     => 'Done with the transaction'
            ],
            [
                'user_id'     => 3,
                'acct_name'   => 'Cook J. Regular Account',
                'init_invest' => 70000,
                'start_date'  => '2020-11-09',
                'remarks'     => 'Done with the transaction'
            ]
        ];

        foreach($data as $acc) {
            \App\Accounts::create($acc);
        }
    }
}
