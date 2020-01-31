<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('attributes')->delete();

      $now = Carbon::now();

      DB::table('attributes')->insert([
          ['id' => '1','code' => 'short_description','name' => '简短说明','type' => 'textarea','validation' => NULL,'is_required' => '1','is_unique' => '0','is_user_defined' => '0','created_at' => $now,'updated_at' => $now],
          ['id' => '2','code' => 'description','name' => '说明','type' => 'textarea','validation' => NULL,'is_required' => '1','is_unique' => '0','is_user_defined' => '0','created_at' => $now,'updated_at' => $now],

          ['id' => '3','code' => 'meta_title','name' => '元标题','type' => 'text','validation' => NULL,'is_required' => '1','is_unique' => '0','is_user_defined' => '0','created_at' => $now,'updated_at' => $now],
          ['id' => '4','code' => 'meta_keywords','name' => '元关键词','type' => 'text','validation' => NULL,'is_required' => '1','is_unique' => '0','is_user_defined' => '0','created_at' => $now,'updated_at' => $now],
          ['id' => '5','code' => 'meta_description','name' => '元说明','type' => 'textarea','validation' => NULL,'is_required' => '1','is_unique' => '0','is_user_defined' => '0','created_at' => $now,'updated_at' => $now],

          ['id' => '6','code' => 'width','name' => '宽','type' => 'text','validation' => NULL,'is_required' => '1','is_unique' => '0','is_user_defined' => '0','created_at' => $now,'updated_at' => $now],
          ['id' => '7','code' => 'height','name' => '高','type' => 'text','validation' => NULL,'is_required' => '1','is_unique' => '0','is_user_defined' => '0','created_at' => $now,'updated_at' => $now],
          ['id' => '8','code' => 'length','name' => '长','type' => 'text','validation' => NULL,'is_required' => '1','is_unique' => '0','is_user_defined' => '0','created_at' => $now,'updated_at' => $now],
          ['id' => '9','code' => 'weight','name' => '重量','type' => 'text','validation' => NULL,'is_required' => '1','is_unique' => '0','is_user_defined' => '0','created_at' => $now,'updated_at' => $now],
          ['id' => '10','code' => 'color','name' => '颜色','type' => 'radio','validation' => NULL,'is_required' => '1','is_unique' => '0','is_user_defined' => '0','created_at' => $now,'updated_at' => $now],
          ['id' => '11','code' => 'size','name' => '尺码','type' => 'radio','validation' => NULL,'is_required' => '1','is_unique' => '0','is_user_defined' => '0','created_at' => $now,'updated_at' => $now]        
      ]);
    }
}
