<?php

use Illuminate\Database\Seeder;

class ConversionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $size = 50;
        for ($i = 0; $i < $size; $i++) {
            factory(\App\Models\Conversion::class, 10000)->create();
        }
    }
}
