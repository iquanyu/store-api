<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersSeeder::class);
        $this->call(AttributeSeeder::class);
        $this->call(AttributeFamilySeeder::class);
        $this->call(AttributeGroupSeeder::class);
        $this->call(AttributeOptionSeeder::class);
    }
}
