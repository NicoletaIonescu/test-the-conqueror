<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Super Admin",
            "email" => "admin@admin.com",
            "firstname" => "Super",
            "lastname" => "Admin",
            "password" => bcrypt('password'),
            "hobbies" => serialize([
                "Soccer",
                "Game",
                "Watching"
            ]),
            "phone" => "9999999999",
            "country_id" => 2
        ]);

        User::create([
            "name" => "Test 1",
            "email" => "test1@test.com",
            "firstname" => "Test1",
            "lastname" => "Test",
            "password" => bcrypt('password'),
            "hobbies" => serialize([
                "Soccer",
                "Game",
                "Watching"
            ]),
            "phone" => "9999999999",
            "country_id" => 2
        ]);

        User::create([
            "name" => "Test 2",
            "email" => "test2@test.com",
            "firstname" => "Test2",
            "lastname" => "Test",
            "password" => bcrypt('password'),
            "hobbies" => serialize([
                "Soccer",
                "Game",
                "Watching"
            ]),
            "phone" => "9999999999",
            "country_id" => 2
        ]);
    }
}
