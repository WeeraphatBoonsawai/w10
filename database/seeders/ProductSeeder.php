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
        $products = [
            [
                'name' => 'ไข่ หน้าหล่อ',
                'price' => 250,
                'description' => 'lorem ipsum',
                'image' => 'https://i.pinimg.com/564x/05/49/0a/05490aa368d98bf05de4093897c38208.jpg'
            ],
            [
                'name' => 'Bee Smile',
                'price' => 6,
                'description' => 'lorem ipsum',
                'image' => 'https://i.pinimg.com/564x/8b/f4/f0/8bf4f00455217ff136abb2b12d1dbbd9.jpg'
            ],
            [
                'name' => 'หน้าหล่อ',
                'price' => 50,
                'description' => 'lorem ipsum',
                'image' => 'https://i.pinimg.com/564x/7b/0e/b5/7b0eb5560d0593aaaa655ca76ba05e91.jpg'
            ],
            [
                'name' => 'กุหลาบแก่คุณ',
                'price' => 12,
                'description' => 'lorem ipsum',
                'image' => 'https://i.pinimg.com/564x/c8/64/8b/c8648bd37afe6b82d03d9e655e9d0979.jpg'
            ]
        ];
        Product::insert($products);
    
    }
}
