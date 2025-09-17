<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsPhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        //cement
        Product::find(1)->update([
            "photo" => "images/gallery/cement.jpg"
        ]);
        Product::find(2)->update([
            "photo" => "images/gallery/quarry-stone.jpg"
        ]);
        Product::find(3)->update([
            "photo" => "images/gallery/pebble-stone.jpg"
        ]);
        Product::find(4)->update([
            "photo" => "images/gallery/quarry-dust.jpg"
        ]);
        Product::find(5)->update([
            "photo" => "images/gallery/cement-blocks.jpg"
        ]);
        Product::find(6)->update([
            "photo" => "images/gallery/river-sand.jpg"
        ]);
        Product::find(7)->update([
            "photo" => "images/gallery/other.png"
        ]);
       
    }
}
