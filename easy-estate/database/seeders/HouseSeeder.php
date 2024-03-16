<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //delete all records in table first
        \App\Models\House::query()->delete();

        function randHouseNumbers(){
            //Street Numbers
            $randStreetAdd = rand(10000, 99999);
            //Street Direction
            $str = 'NSEW';
            $randStreetDir = $str[rand(0, strlen($str)-1)];
            //Street Drive
            $arr = array( "a"=>"St.", "b"=>"Dr.", "c"=>"Rd.", "d"=>"Ave." );
            $key = array_rand($arr);
            $randDrive = $arr[$key];
    
            return $randStreetAdd . ' ' . $randStreetDir . ' ' . $randDrive;
        }
    
        function randCity(){
            $arr = array(
                "a"=>"Seattle",
                "b"=>"Olympia",
                "c"=>"Tacoma",
                "d"=>"Kennewick",
                "e"=>"Spokane",
                "f"=>"Vancouver",
                "g"=>"Yakima",
                "h"=>"Kent"
            );
            $key = array_rand($arr);
            $randCity = $arr[$key];
            return $randCity;
        }

        //add new seeded values
        foreach(range(1,800) as $number){

            \App\Models\House::create([
                'street_address' => randHouseNumbers(),
                'street_city' => randCity(),
                'street_state' => 'WA',
                'for_purchase' => rand(0, 1),
                'price' => rand(250000, 3000000),
                'bed' => rand(1, 3),
                'bath' => rand(1, 3),
                'sqft' => rand(500, 2500),
                'stories' => rand(1, 3),
                'dishwasher' => rand(0, 1),
                'disposal' => rand(0, 1),
                'washer' => rand(0, 1),
                'dryer' => rand(0, 1),
                'fridge' => rand(0, 1),
                'heat_cooling' => rand(0, 1),
                'fireplace' => rand(0, 1),
                'garage' => rand(0, 1),
                'year_built' => rand(1890, 2024),
                'year_renovated' => rand(1890, 2024)
            ]);
        };
    }

}
