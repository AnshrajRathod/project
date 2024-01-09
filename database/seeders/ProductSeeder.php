<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['category_name' => 'MEN'],
            ['category_name' => 'WOMENS'],
            ['category_name' => 'KIDS'],
        ];

       
        DB::table('category_master')->insert($categories);
    }
}
