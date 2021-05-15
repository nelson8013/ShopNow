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
        DB::table('products')->insert(
            [
                'name' => 'Haier Freezer',
                'price' => '$500',
                'category' => 'Tv',
                'description' => 'Haier Thermocool Large Chest Freezer Lrg-429 R6 White',
                'gallery' => ' https://www-konga-com-res.cloudinary.com/w_auto,f_auto,fl_lossy,dpr_auto,q_auto/media/catalog/product/L/Q/108961_1567846399.jpg'
            ]




    );
    }
}
