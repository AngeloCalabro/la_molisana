<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('db_seeder.products');
        // dd($products);
        foreach($products as $product){
            $newProduct = new Product();
            $newProduct->title = $product['titolo'];
            $newProduct->description = $product['descrizione'];
            $newProduct->type = $product['tipo'];
            $newProduct->image = $product['src-h'];
            $newProduct->cooking_time = $product['cottura'];
            $newProduct->weight = $product['peso'];
            $newProduct->save();
        }
    }
}
