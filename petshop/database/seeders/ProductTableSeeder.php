<?php
namespace Database\Seeders;


use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new \App\Models\Product([
            'imagepath' => './images/bed/bed1.jpg' ,
            'title' => 'Grey Animal Bed(SALE)' ,
            'description' => 'Felix cat food are tasty meals which look and smell so delicious.' ,
            'price' =>  30,
            'category' => 'Bed',
            'sale'=>'Yes'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagepath' => './images/bed/bed2.jpg' ,
            'title' => 'Grey Double Animal Bed' ,
            'description' => 'Bad boy scran' ,
            'price' =>  50,
            'category' => 'Bed',
            'sale'=>'No'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagepath' => './images/bed/bed3.jpg' ,
            'title' => 'Furry Animal Bed' ,
            'description' => 'Bad boy scran' ,
            'price' =>  20,
            'category' => 'Bed',
            'sale'=>'No'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagepath' => './images/bed/bed4.jpg' ,
            'title' => 'Djingo Animal Bed(SALE)' ,
            'description' => 'Bad boy scran' ,
            'price' =>  15.45,
            'category' => 'Bed',
            'sale'=>'Yes'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagepath' => './images/bed/bed5.jpg' ,
            'title' => 'White Animal Bed' ,
            'description' => 'Bad boy scran' ,
            'price' =>  38,
            'category' => 'Bed',
            'sale'=>'No'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagepath' => './images/brush/brush1.jpg' ,
            'title' => 'Single Brush For All(SALE)' ,
            'description' => 'Bad boy scran' ,
            'price' =>  45,
            'category' => 'Grooming',
            'sale'=>'Yes'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagepath' => './images/brush/brush2.jpg' ,
            'title' => 'Grooming Kit For All' ,
            'description' => 'Bad boy scran' ,
            'price' =>  10,
            'category' => 'Grooming',
            'sale'=>'No'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagepath' => './images/brush/brush3.jpg' ,
            'title' => 'Double Sided Brush For All' ,
            'description' => 'Bad boy scran' ,
            'price' =>  10,
            'category' => 'Grooming',
            'sale'=>'No'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagepath' => './images/brush/brush4.jpg' ,
            'title' => 'Animal Brush For Long Hair' ,
            'description' => 'Bad boy scran' ,
            'price' =>  12,
            'category' => 'Grooming',
            'sale'=>'No'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagepath' => './images/brush/brush5.jpg' ,
            'title' => 'Furminator Brush(SALE)' ,
            'description' => 'Bad boy scran' ,
            'price' =>  18,
            'category' => 'Grooming',
            'sale'=>'Yes'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagepath' => './images/catfood/catfood1.jpg' ,
            'title' => 'Felix As Good As It Looks (88)(SALE)' ,
            'description' => 'Bad boy scran' ,
            'price' =>  120,
            'category' => 'Food',
            'sale'=>'Yes'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagepath' => './images/catfood/catfood2.jpg' ,
            'title' => 'Felix As Good As It Looks (40)' ,
            'description' => 'Bad boy scran' ,
            'price' =>  10,
            'category' => 'Food',
            'sale'=>'No'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagepath' => './images/catfood/catfood3.jpg' ,
            'title' => 'Felix As Good As It Looks (Fish)(40)' ,
            'description' => 'Bad boy scran' ,
            'price' =>  15,
            'category' => 'Food',
            'sale'=>'No'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagepath' => './images/catfood/catfood4.jpg' ,
            'title' => 'Felix doubley delicious (88)' ,
            'description' => 'Bad boy scran' ,
            'price' =>  19,
            'category' => 'Food',
            'sale'=>'No'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagepath' => './images/catfood/catfood5.jpg' ,
            'title' => 'Felix Tasty Shreds (40)(SALE)' ,
            'description' => 'Bad boy scran' ,
            'price' =>  34,
            'category' => 'Food',
            'sale'=>'Yes'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagepath' => './images/dogfood/dogfood1.jpg' ,
            'title' => 'Harringtons Complete Grain Free Mixed Bumper Adult Wet Dog' ,
            'description' => 'Bad boy scran' ,
            'price' =>  76,
            'category' => 'Food',
            'sale'=>'No'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagepath' => './images/dogfood/dogfood2.jpg' ,
            'title' => 'Butchers Joints and Coat Wet Adult Dog Food' ,
            'description' => 'Bad boy scran' ,
            'price' =>  11,
            'category' => 'Food',
            'sale'=>'No'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagepath' => './images/dogfood/dogfood3.jpg' ,
            'title' => 'Wainwrights Sensitive Wet Mature Dog Food' ,
            'description' => 'Bad boy scran' ,
            'price' =>  11,
            'category' => 'Food',
            'sale'=>'No'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagepath' => './images/dogfood/dogfood4.jpg' ,
            'title' => 'AVA Veterinary Approved Wet Adult Dog Food' ,
            'description' => 'Bad boy scran' ,
            'price' =>  8,
            'category' => 'Food',
            'sale'=>'No'

        ]);
        $product->save();

        $product = new \App\Models\Product([
            'imagepath' => './images/dogfood/dogfood5.jpg' ,
            'title' => 'Scrumbles Complete Grain Free Wet Dog Food(SALE)' ,
            'description' => 'Bad boy scran' ,
            'price' =>  90,
            'category' => 'Food',
            'sale'=>'Yes'

        ]);
        $product->save();


    }
}
