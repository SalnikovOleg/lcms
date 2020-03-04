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
        $this->call(ArticlesSeeder::class);
        $this->call(PlacesSeeder::class);
        $this->call(WidgetSeeder::class);
        $this->call(PagesSeeder::class);
        $this->call(OptionsSeeder::class);
    }
}
