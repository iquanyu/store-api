<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeFamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('attribute_families')->delete();

      DB::table('attribute_families')->insert([
          ['id' => '1','code' => 'default','name' => '默认','status' => '1','is_user_defined' => '1']
      ]);
    }
}
