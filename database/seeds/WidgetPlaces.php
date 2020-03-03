<?php

use Illuminate\Database\Seeder;

class WidgetPlaces extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('widget_places')->truncate();
        DB::table('widget_places')->insert([
            ['name' => 'HEAD_COL1'],
            ['name' => 'HEAD_COL2'],
            ['name' => 'HEAD_COL3'],
            ['name' => 'LOGO'],
            ['name' => 'MAIN_MENU'],
            ['name' => 'LEFT_COL'],
            ['name' => 'BOTTOM'],
            ['name' => 'FOOT_COL1'],
            ['name' => 'FOOT_COL2'],
            ['name' => 'FOOT_COL3'],
            ['name' => 'FOOT_COL4'],
            ['name' => 'FOOT_LINE'],
            ['name' => 'SOCIAL'],
            ['name' => 'SEARCH'],
        ]);
    }
}