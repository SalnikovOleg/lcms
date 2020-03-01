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
        //$this->call(ArticlesSeeder::class);
        //$this->call(WidgetPlaces::class);
        //$this->call(UserswidgetSeeder::class);
        //$this->call(menuitems::class);
        //$this->call(PagesSeeder::class);
        $this->call(Options::class);
    }
}
