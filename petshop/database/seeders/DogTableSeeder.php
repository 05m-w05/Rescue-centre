<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dog = new \App\Models\Dog([
            'name' => 'Jack' ,
            'imagepath' => 'images/rescues/poodle.jpg' ,
            'breed' => 'Poodle' ,
            'age' =>  7,
            'description' => 'Jack is a good dog who we rescued from an abusive home. Jack needs someone who is patient. He can be shy at first, but will open up with time. Jack cannot be around children for the time being.'

        ]);
        $dog->save();

        $dog = new \App\Models\Dog([
            'name' => 'Dino' ,
            'imagepath' => 'images/rescues/dino.jpg' ,
            'breed' => 'Japanese Akita' ,
            'age' =>  7,
            'description' => 'Dino is a 7 year old looking for a quiet home with lots of love to give.'

        ]);
        $dog->save();

        $dog = new \App\Models\Dog([
            'name' => 'Johnny' ,
            'imagepath' => 'images/rescues/johnny.jpg' ,
            'breed' => 'Japanese Akita' ,
            'age' =>  1,
            'description' => 'Johnny’s eyes and ears may not be as strong as other dogs, but his heart sure is.'

        ]);
        $dog->save();

        $dog = new \App\Models\Dog([
            'name' => 'Tyson' ,
            'imagepath' => 'images/rescues/tyson.jpg' ,
            'breed' => 'German Shepherd' ,
            'age' =>  15,
            'description' => 'Tyson is thought to be a German Shepherd and he is looking for a family which has had large dogs previously.   He needs to be the only furry companion in the home but he is used to meeting other dogs outside. '

        ]);
        $dog->save();

        $dog = new \App\Models\Dog([
            'name' => 'Bracken' ,
            'imagepath' => 'images/rescues/bracken.jpg' ,
            'breed' => 'Rottweiler cross' ,
            'age' =>  6,
            'description' => 'Bracken is thought to be a Rottweiller cross and he is looking for a family which has had large dogs previously.   He needs to be the only furry companion in the home but he is used to meeting other dogs outside. '

        ]);
        $dog->save();

        $dog = new \App\Models\Dog([
            'name' => 'Chase' ,
            'imagepath' => 'images/rescues/chase.jpg' ,
            'breed' => 'German shepherd crossbreed' ,
            'age' =>  7,
            'description' => 'Chase didn’t arrive at the centre in the best condition, with fur loss and sores due to a flea allergy, but we are hoping it won’t be long before he is back in tip top shape.'

        ]);
        $dog->save();

        $dog = new \App\Models\Dog([
            'name' => 'Dexter' ,
            'imagepath' => 'images/rescues/dexter.jpg' ,
            'breed' => 'Labrador Retriever Crossbreed' ,
            'age' =>  7,
            'description' => 'Chase didn’t arrive at the centre in the best condition, with fur loss and sores due to a flea allergy, but we are hoping it won’t be long before he is back in tip top shape.'

        ]);
        $dog->save();
    }
}
