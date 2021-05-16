<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            "name"=>"OPPO Mobile",
            "price"=>"300",
            "category"=>"mobile",
            "description"=>"A Smart phone with 8gb Ram and much more features.",
            "gallery"=>"https://static.toiimg.com/photo/70072353.cms",
            ],
            [
                "name"=>'LG TV',
                "price"=>"400",
                "category"=>"Smart Tv",
                "description"=>"A SmartTv  much more features.",
                "gallery"=>"https://i.gadgets360cdn.com/products/large/realme-smart-tv-43-db-800x450-1590390507.jpg",
            ],
            [
                "name"=>'Sony Tv',
                "price"=>"500",
                "category"=>"Tv",
                "description"=>"A Smart Tv  much more features.",
                "gallery"=>"https://images.samsung.com/is/image/samsung/levant-uhd-tu8500-ua55tu8500uxtw-frontblack-229855928?$720_576_PNG$",
            ],
            [
                "name"=>'LG Fridge',
                "price"=>"700",
                "category"=>"Fridge",
                "description"=>"A Fridge phone with  much more features.",
                "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/61pkHR5vYPL._SL1500_.jpg",
            ],

        ]);
    }
}
