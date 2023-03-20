<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name'=>'NIKON D7500 20.9 MP WITH 18-140MM LENS 4K WI-FI BLUETOOTH TOUCHSCREEN DSLR CAMERA',
            'price'=>'1106',
            'category'=>'Camera',
            'description'=>'Model: Nikon D7500
            20.9MP DX-Format CMOS Sensor
            EXPEED 5 Image Processor
            3.2" 922k-Dot Tilting Touchscreen LCD
            4K UHD Video Recording at 30 fps',
            'gallery'=>'https://www.startech.com.bd/image/cache/catalog/camera/dslr-camera/nikon/d7500/d7500-3-500x500.jpg',
        ]);
    }
}
