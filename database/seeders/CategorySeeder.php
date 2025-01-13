<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
        "Women's Clothing",
        "Men's Clothing",
        'Cellphones',
        'Computer & Office',
        'Consumer Electronics',
        'Jewelry & Accessories',
        'Home & Garden',
        'Shoes',
        'Mother & Kids',
        'Outdoor fun'
        ];

        foreach ($categories as $key => $value) {
            Category::create([
                'name' => $value,
                'slug' => Str::slug($value,'-'),
                'image' => 'default.png',
                'status' => 1,


            ]);
        }
    }
}
