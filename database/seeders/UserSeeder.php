<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
            'name' => 'Mxolisi',
            'surname'=> 'Poni',
            'phone' => '+27431231754',
            'email' => 'mxolisi.poni@ictchoice.co.za',
            'department' => 'Software Development',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            ],
        );
        DB::table('users')->insert(
            [
                'name' => 'Luyolo',
                'surname'=> 'Mnganga',
                'phone' => '+27846542443',
                'email' => 'luyolo.mnganga@ictchoice.co.za',
                'department' => 'Software Development',
                'role' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
        );
            DB::table('users')->insert(
            [
                'name' => 'Ayabonga',
                'surname'=> 'Maqashu',
                'phone' => '+27431231754',
                'email' => 'ayabonga.maqashu@ictchoice.co.za',
                'department' => 'Software Development',
                'role' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
        );
            DB::table('users')->insert(
            [
                'name' => 'Nosisa',
                'surname'=> 'Zamxaka',
                'phone' => '+27431231754',
                'email' => 'nosisa.zamxaka@ictchoice.co.za',
                'department' => 'Software Development',
                'role' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
        );
            DB::table('users')->insert(
            [
                'name' => 'Yolanda',
                'surname'=> 'Mlakuhlwa',
                'phone' => '+27431231754',
                'email' => 'yolanda.mlakuhlwa@ictchoice.co.za',
                'department' => 'Software Development',
                'role' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
        );
            DB::table('users')->insert(
            [
                'name' => 'Andile',
                'surname'=> 'Majiba',
                'phone' => '+27431231754',
                'email' => 'andile.majiba@ictchoice.co.za',
                'department' => 'Software Development',
                'role' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
            ],
        );
            DB::table('users')->insert(
            [ 
                'name' => 'avile',
                'surname'=> 'momoza',
                'phone' => '+27431231754',
                'email' => 'avile.momoza@ictchoice.co.za',
                'department' => 'Software Development',
                'role' => 'admin',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                ],

    );
    DB::table('role_user')->insert(
        [
            'role_id' => 1,
            'user_id' => 1,
            'user_type' => 'App\Models\User',
        ]
    );
    DB::table('role_user')->insert(
        [
            'role_id' => 1,
            'user_id' => 2,
            'user_type' => 'App\Models\User',
        ]
    );
    DB::table('role_user')->insert(
        [
            'role_id' => 1,
            'user_id' => 3,
            'user_type' => 'App\Models\User',
        ]
    );
    DB::table('role_user')->insert(
        [
            'role_id' => 1,
            'user_id' => 4,
            'user_type' => 'App\Models\User',
        ]
    );
    DB::table('role_user')->insert(
        [
            'role_id' => 1,
            'user_id' => 5,
            'user_type' => 'App\Models\User',
        ]
    );
    DB::table('role_user')->insert(
        [
            'role_id' => 1,
            'user_id' => 6,
            'user_type' => 'App\Models\User',
        ]
    );
    DB::table('role_user')->insert(
        [
            'role_id' => 1,
            'user_id' => 7,
            'user_type' => 'App\Models\User',
        ]
    );
        DB::table('department')->insert([
            'name' => 'Software Development',
        ]);
        DB::table('department')->insert([
            'name' => 'Business Development',
        ]);
        DB::table('department')->insert([
            'name' => 'Project Management',
        ]);
        DB::table('department')->insert([
            'name' => 'Technical Department',
        ]);
        DB::table('department')->insert([
            'name' => 'Finance Department',
        ]);
        DB::table('department')->insert([
            'name' => 'Executive Management',
        ]);
        DB::table('leaves')->insert([
            'name' => 'Vaccation',
            'numOfDays' => '5',
        ]);
        DB::table('leaves')->insert([
            'name' => 'Annual',
            'numOfDays' => '5',
        ]);
        DB::table('leaves')->insert([
            'name' => 'Sick',
            'numOfDays' => '5',
        ]);
        DB::table('leaves')->insert([
            'name' => 'Study',
            'numOfDays' => '5',
        ]);
        DB::table('leaves')->insert([
            'name' => 'Family',
            'numOfDays' => '5',
        ]);
        DB::table('leaves')->insert([
            'name' => 'Maternity',
            'numOfDays' => '5',
        ]);
        DB::table('leaves')->insert([
            'name' => 'Time Of Without Pay',
            'numOfDays' => '5',
        ]);
        DB::table('holiday')->insert(
            [
            'name' => 'New Year\'s Day',
            'date' => '2022-01-01',
            'created_at'=>now(),
            'updated_at' => now(),
            ],
             [
            'name' => 'Human Rights Day',
            'date' => '2022-03-21',
            'created_at'=>now(),
            'updated_at' => now(),
            ],
            [
            'name' => 'Good Friday',
            'date' => '2022-04-15',
            'created_at'=>now(),
            'updated_at' => now(),
            ],
            [
                'name' => 'Family Day',
                'date' => '2022-04-18',
                'created_at'=>now(),
                'updated_at' => now(),
            ],
            
            [
                'name' => 'Freedom Day',
                'date' => '2022-04-27',
                'created_at'=>now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'International Workers\' Day',
                'date' => '2022-05-02',
                'created_at'=>now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Youth Day (in South Africa)',
                'date' => '2022-06-16',
                'created_at'=>now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'National Women\'s Day',
                'date' => '2022-08-09',
                'created_at'=>now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Day of Reconciliation',
                'date' => '2022-12-16',
                'created_at'=>now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Christmas Day',
                'date' => '2022-12-25',
                'created_at'=>now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Heritage Day',
                'date' => '2022-09-24',
                'created_at'=>now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Boxing Day',
                'date' => '2022-12-26',
                'created_at'=>now(),
                'updated_at' => now(),
            ],

    );
    }
}