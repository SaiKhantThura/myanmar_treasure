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
        
        $this->call([RolesTableSeeder::class]);
        $this->call([UsersTableSeeder::class]);
        $this->call([ProductCategoryTablesSeeder::class]);
        $this->call([BlogCategoryTablesSeeder::class]);
        $this->call([BlogSeeder::class]);
        $this->call([ProductSeeder::class]);
        
    }
}
