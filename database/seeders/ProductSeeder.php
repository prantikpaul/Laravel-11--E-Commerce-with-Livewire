<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create();
        $images = [
            'https://img.drz.lazcdn.com/static/bd/p/174d6bf378fb42b5855e22f6c68c7612.jpg_720x720q80.jpg_.webp',
            'https://img.drz.lazcdn.com/static/bd/p/59cd4e1b803e5751b3f25782144df850.jpg_720x720q80.jpg_.webp',
            'https://img.drz.lazcdn.com/static/bd/p/d60eee941ed78b67dc225e2fc0cdd5f8.jpg_720x720q80.jpg_.webp',
            'https://img.drz.lazcdn.com/g/kf/Sae6143c7bc6d4b68a8d29b141e81a52d3.jpg_720x720q80.jpg_.webp',
        ];

        foreach (range(1, 20) as $key => $value) {
            $name = $faker->unique()->name;
            Product::create([
                'name' => $name,
                'slug' => Str::slug($name, '-'),
                'short_description' => $faker->text(100),
                'long_description' => $faker->text(300),
                'regular_price' => $faker->numberBetween(100, 500),
                'sale_price' => $faker->numberBetween(50, 300),
                'image' => $images[rand(0, 3)],
                'images' => '1.png',
                'category_id' => rand(1, 10),
            ]);
        }
    }

}
