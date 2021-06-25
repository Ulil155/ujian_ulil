<?php

namespace Database\Seeders;

use App\Models\User;
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
        $users = [
            [
                "name" => "Moch. Ulil Abshor",
                "nbi" => "1461900155",
                "password" => bcrypt("1461900155"),
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ];

        User::insert($users);
    }
}
