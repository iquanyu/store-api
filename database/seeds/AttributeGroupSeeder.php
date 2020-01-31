<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('attribute_groups')->delete();

      DB::table('attribute_groups')->insert([
          ['id' => '1','name' => '常规','is_user_defined' => '0','attribute_family_id' => '1'],
          ['id' => '2','name' => '说明','is_user_defined' => '0','attribute_family_id' => '1'],
          ['id' => '3','name' => 'Meta','is_user_defined' => '0','attribute_family_id' => '1'],
          ['id' => '4','name' => '价格','is_user_defined' => '0','attribute_family_id' => '1'],
          ['id' => '5','name' => '物流','is_user_defined' => '0','attribute_family_id' => '1']
      ]);

      DB::table('attribute_group_mappings')->insert([
          ['attribute_id' => '1','attribute_group_id' => '2'],
          ['attribute_id' => '2','attribute_group_id' => '2'],
          ['attribute_id' => '3','attribute_group_id' => '3'],
          ['attribute_id' => '4','attribute_group_id' => '3'],
          ['attribute_id' => '5','attribute_group_id' => '3'],
          ['attribute_id' => '6','attribute_group_id' => '1'],
          ['attribute_id' => '7','attribute_group_id' => '1'],
          ['attribute_id' => '8','attribute_group_id' => '1'],
          ['attribute_id' => '9','attribute_group_id' => '1'],
          ['attribute_id' => '10','attribute_group_id' => '1'],
          ['attribute_id' => '11','attribute_group_id' => '1'],
      ]);
    }
}
