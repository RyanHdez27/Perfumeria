<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Scandal',
            'house' => 'Paco Rabanne',
            'description' => 'Un perfume distinto a los demas con notas dulces y amaderadas.',
            'price' => 130.00,
            'image_url' => 'images/scandal.png',
        ]);

        Product::create([
            'name' => 'Creed',
            'house' => 'Aventus',
            'description' => 'Una fragancia refrescante con un toque cítrico para destacar cuando el clima no ayude.',
            'price' => 120.000,
            'image_url' => 'images/creed.png',
        ]);

        Product::create([
            'name' =>'Le Male',
            'house' =>'Jean Paul Gaultier',
            'description' =>'asdafasdfsdfasd',
            'price' => 1400.000,
            'image_url' => 'images/lemale.png',
            ]);
    }
}
