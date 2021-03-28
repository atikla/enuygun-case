<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::insert([
            [
                'name'      => 'DEV1',
                'email'     => 'dev1@enuygun.com',
                'password'  => bcrypt('123321ll'),
                'level'     => '1',
                'duration'  => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name'      => 'DEV2',
                'email'     => 'dev2@enuygun.com',
                'password'  => bcrypt('123321ll'),
                'level'     => '2',
                'duration'  => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name'      => 'DEV3',
                'email'     => 'dev3@enuygun.com',
                'password'  => bcrypt('123321ll'),
                'level'     => '3',
                'duration'  => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name'      => 'DEV4',
                'email'     => 'dev4@enuygun.com',
                'password'  => bcrypt('123321ll'),
                'level'     => '4',
                'duration'  => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ],
            [
                'name'      => 'DEV5',
                'email'     => 'dev5@enuygun.com',
                'password'  => bcrypt('123321ll'),
                'level'     => '5',
                'duration'  => '1',
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]
        ]);
    }
}
