<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [ 'category_id' => 1, 'product_name' => 'Men Jeans', 'product_price' => 900, 'product_description' => 'Men Slim Mid Rise Grey Jeans', 'product_image_path' => '862665-10195740.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 1, 'product_name' => 'Men Watch', 'product_price' => 1500, 'product_description' => 'Trending Day & Date Functioning for Boys Analog Watch - For Men LCS-8190', 'product_image_path' => '887547-10694525.webp', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 1, 'product_name' => 'Men shirt', 'product_price' => 489, 'product_description' => 'Men Slim Fit Solid Slim Collar Casual Shirt', 'product_image_path' => '898376-10977544.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 1, 'product_name' => 'Men Shoes', 'product_price' => 3231, 'product_description' => 'X-Ray 2 Square Sneakers For Men', 'product_image_path' => '907169-11185616.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 1, 'product_name' => 'Men Belt', 'product_price' => 590, 'product_description' => 'Men Formal, Casual, Formal, Party Beige Nylon Belt', 'product_image_path' => '937622-11972281.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 1, 'product_name' => 'Men Shirt', 'product_price' => 1609, 'product_description' => 'Men Regular Fit Solid Cut Away Collar Casual Shirt', 'product_image_path' => '960658-12460576.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 1, 'product_name' => 'Men Shirt', 'product_price' => 1408, 'product_description' => 'Men Regular Fit Solid Cut Away Collar Casual Shirt', 'product_image_path' => '963180-12541689.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 1, 'product_name' => 'Men T-shirt', 'product_price' => 590, 'product_description' => 'Men Graphic Print Round Neck Polyester White T-Shirt', 'product_image_path' => '963247-12542110.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 1, 'product_name' => 'Men Shoes', 'product_price' => 5009, 'product_description' => '327 Sneakers For Men', 'product_image_path' => '963250-12542130.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 1, 'product_name' => 'Men jacket', 'product_price' => 1500, 'product_description' => 'Men Solid Puffer Jacket', 'product_image_path' => '965630-12609985.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 1, 'product_name' => 'Men Shirt', 'product_price' => 489, 'product_description' => 'Men Slim Fit Solid Spread Collar Casual Shirt', 'product_image_path' => 's-bs-005-borntofly-original-imaghdfzavg9zhxz.webp', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 1, 'product_name' => 'Men T-shirt', 'product_price' => 579, 'product_description' => 'Men Solid Round Neck Cotton Blend Black T-Shirt', 'product_image_path' => 't-shirt.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 2, 'product_name' => 'Woman T shirt', 'product_price' => 799, 'product_description' => 'Women Tie & Dye Round Neck Pure Cotton Purple T-Shirt', 'product_image_path' => '885187-10649017.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 2, 'product_name' => 'Women Watch', 'product_price' => 989, 'product_description' => 'Analog Watch - For Women HT-LR018-GRN-GRN', 'product_image_path' => '887541-10694504.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 2, 'product_name' => 'Women Slides', 'product_price' => 600, 'product_description' => 'EVK10909L Stylish Waterproof Lightweight Washable Durable Rainwear Women Slides', 'product_image_path' => '889399-10739487.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 2, 'product_name' => 'Women Shirt', 'product_price' => 1644, 'product_description' => 'Women Regular Fit Striped Mandarin Collar Casual Shirt', 'product_image_path' => '898440-10978019.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 2, 'product_name' => 'Women Dress', 'product_price' => 544, 'product_description' => 'Women Maxi Pink Dress', 'product_image_path' => '901334-11060989.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 2, 'product_name' => 'Women Dress', 'product_price' => 1449, 'product_description' => 'Women Fit and Flare Blue Dress', 'product_image_path' => '907135-11185395.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 2, 'product_name' => 'Women Sweater', 'product_price' => 1319, 'product_description' => 'Women Woven Round Neck Multicolor Sweater', 'product_image_path' => '907137-11185410 (1).avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 2, 'product_name' => 'Women sweater', 'product_price' => 1009, 'product_description' => 'Women Self Design Round Neck White Sweater', 'product_image_path' => '909954-11238634.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 2, 'product_name' => 'Women Dress', 'product_price' => 499, 'product_description' => 'Women Two Piece Dress Brown Dress', 'product_image_path' => '912401-11296011.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 2, 'product_name' => 'Women Bag', 'product_price' => 489, 'product_description' => 'Black, Clear Women Sling Bag', 'product_image_path' => '965833-12622701.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 2, 'product_name' => 'Women Shirt', 'product_price' => 499, 'product_description' => 'Women Boxy Fit Solid Spread Collar Casual Shirt', 'product_image_path' => '965840-12622749.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 2, 'product_name' => 'Women Shoes', 'product_price' => 499, 'product_description' => 'WOMEN,S LIGHT WEIGHT ACTIVE WEAR SHOES FOR INDOOR AND OUTDOOR Bellies For Women (Black)', 'product_image_path' => 'womenshous.webp', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 3, 'product_name' => 'Kids Shirt', 'product_price' => 599, 'product_description' => 'Boys Printed Cotton Blend T Shirt', 'product_image_path' => 'kidescloth.webp', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 3, 'product_name' => 'Kids Shirt', 'product_price' => 602, 'product_description' => 'Boys Regular Fit Striped Casual Shirt', 'product_image_path' => '869528-10334380.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 3, 'product_name' => 'Kids jacket', 'product_price' => 1405, 'product_description' => 'Boys Solid Puffer Jacket', 'product_image_path' => '900380-11044359.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 3, 'product_name' => 'Kids Cloths', 'product_price' => 449, 'product_description' => 'Baby Boys & Baby Girls Party(Festive) Sweater Bib, Cap, Pyjama (Light Blue)', 'product_image_path' => '919475-11519086.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 3, 'product_name' => 'Kids Jacket', 'product_price' => 712, 'product_description' => 'Boys Solid Casual Jacket', 'product_image_path' => '920233-11533466.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 3, 'product_name' => 'Kids Romper', 'product_price' => 790, 'product_description' => 'Romper For Baby Boys & Baby Girls Casual Solid Cotton Blend', 'product_image_path' => '921710-11575814.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 3, 'product_name' => 'Kids T-shirt', 'product_price' => 790, 'product_description' => 'Boys Striped Pure Cotton T Shirt', 'product_image_path' => '934850-11904734.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 3, 'product_name' => 'Kids T-shirt', 'product_price' => 800, 'product_description' => 'Boys Typography Pure Cotton T Shirt', 'product_image_path' => '934851-11904739.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 3, 'product_name' => 'Kids T-shirt', 'product_price' => 770, 'product_description' => 'Baby Boys Printed Cotton Blend T Shirt', 'product_image_path' => '934913-11905487.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 3, 'product_name' => 'Kids romper', 'product_price' => 698, 'product_description' => 'Romper For Baby Boys & Baby Girls Casual Solid Cotton Blend', 'product_image_path' => '962055-12489599.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 3, 'product_name' => 'Kids Romper', 'product_price' => 769, 'product_description' => 'Romper For Baby Boys & Baby Girls Printed Cotton Blend', 'product_image_path' => '962056-12489603.avif', 'created_at' => null, 'updated_at' => null ],
            [ 'category_id' => 3, 'product_name' => 'Kids T-shirt', 'product_price' => 788, 'product_description' => 'Boys Colorblock Cotton Blend T Shirt', 'product_image_path' => '962060-12489617.avif', 'created_at' => null, 'updated_at' => null ],
        ]);
    }
}
