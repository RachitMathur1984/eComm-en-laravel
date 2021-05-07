<?php

namespace Database\Seeders;

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
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo-Mobile',
                'price'=>'300',
                'description'=>'A Smart-Phone with 8 GB-RAM and other features',
                'category'=>'mobile',
                'gallery'=>'https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png'
            ],
            [ 
                'name'=>'Panasonic-SmartTV',
                'price'=>'400',
                'description'=>'A Smart-Television with smart-features',
                'category'=>'Smart-Television',
                'gallery'=>'https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg'
            ],
            [ 
                'name'=>'Sony-SmartTV',
                'price'=>'500',
                'description'=>'A Smart-Television with smart-features',
                'category'=>'Smart-Television',
                'gallery'=>'https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png'
            ],
            [ 
                'name'=>'LG-Fridge',
                'price'=>'200',
                'description'=>'A Fridge with advanced cooling-features',
                'category'=>'Fridge',
                'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU'
            ],
        ]);
    }
}