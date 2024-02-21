<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'title' => 'Fesh milk 500ML',
                'price' => 250,
                'description' => 'lorem ipsum',
                'file_name' => 'https://cdn.pixabay.com/photo/2016/12/06/18/27/milk-1887234__340.jpg'
            ],
            [
                'title' => '20 EGGS',
                'price' => 6,
                'description' => 'lorem ipsum',
                'file_name' => 'https://cdn.pixabay.com/photo/2016/07/23/15/24/egg-1536990__340.jpg'
            ],
            [
                'title' => 'WINE 700ML',
                'price' => 50,
                'description' => 'lorem ipsum',
                'file_name' => 'https://cdn.pixabay.com/photo/2015/11/07/12/00/alcohol-1031713__340.png'
            ],
            [
                'title' => 'SPEAKER',
                'price' => 12,
                'description' => 'lorem ipsum',
                'file_name' => 'https://cdn.pixabay.com/photo/2017/01/06/17/49/honey-1958464__340.jpg'
            ]
        ];
        Product::insert($products);
    }
}
