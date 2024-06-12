<?php

use Illuminate\Database\Seeder;
use App\Models\Challange;

class ChallangesSeeder extends Seeder
{
    public function run()
    {
        Challange::create([
            "name" => "Mount Killimangiaro",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "distance_km" => 97,
            "distance_ml" => 23,
            "virtual_postcards" => 5,
            "has_street_view"=> true,
            "wallpaper" => "/assets/challange_wallpaper/KM.png",
            "image"=> "assets/challange_image/KM.png"
        ]);


        Challange::create([
            "name" => "Angkor Wat",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "distance_km" => 45,
            "distance_ml" => 97,
            "virtual_postcards" => 5,
            "has_street_view"=> false,
            "wallpaper" => "/assets/challange_wallpaper/AW.png",
            "image"=> "assets/challange_image/AW.png"
        ]);

        Challange::create([
            "name" => "Inca Trail",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "distance_km" => 97,
            "distance_ml" => 97,
            "virtual_postcards" => 5,
            "has_street_view"=> false,
            "wallpaper" => "/assets/challange_wallpaper/IT.png",
            "image"=> "assets/challange_image/IT.png"
        ]);


        Challange::create([
            "name" => "Berlin Wall",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "distance_km" => 45,
            "distance_ml" => 63,
            "virtual_postcards" => 5,
            "has_street_view"=> true,
            "wallpaper" => "/assets/challange_wallpaper/BW.jpeg",
            "image"=> "assets/challange_image/BW.png"
        ]);

        Challange::create([
            "name" => "Flower Route",
            "description" => "Test",
            "distance_km" => 97,
            "distance_ml" => 97,
            "virtual_postcards" => 5,
            "has_street_view"=> false,
            "wallpaper" => "/assets/challange_wallpaper/FR.png",
            "image"=> "assets/challange_image/FR.png"
        ]);
    }
}
