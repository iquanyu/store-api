<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('attribute_options')->truncate();

      DB::table('attribute_options')->insert([
          ['id' => '1', 'name' => '红色','attribute_id' => '10'],
          ['id' => '2', 'name' => '绿色', 'attribute_id' => '10'],
          ['id' => '3', 'name' => '黄色', 'attribute_id' => '10'],
          ['id' => '4', 'name' => '黑色', 'attribute_id' => '10'],
          ['id' => '5', 'name' => '白色', 'attribute_id' => '10'],
          ['id' => '6', 'name' => 'S', 'attribute_id' => '11'],
          ['id' => '7', 'name' => 'M', 'attribute_id' => '11'],
          ['id' => '8', 'name' => 'L', 'attribute_id' => '11'],
          ['id' => '9', 'name' => 'XL', 'attribute_id' => '11']
      ]);
    }
}
