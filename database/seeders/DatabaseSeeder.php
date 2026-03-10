<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Student::insert([
            ['name' => 'Shakil', 'age' => 22, 'marks' => 45],
            ['name' => 'Rahim', 'age' => 24, 'marks' => 65],
            ['name' => 'Karim', 'age' => 23, 'marks' => 80],
        ]);


        Product::insert([
            ['name' => 'Laptop', 'price' => 50000, 'stock' => 10],
            ['name' => 'Mouse', 'price' => 500, 'stock' => 0],
            ['name' => 'Keyboard', 'price' => 1500, 'stock' => 5],
        ]);
    }
}
