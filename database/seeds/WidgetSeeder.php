
<?php

use Illuminate\Database\Seeder;

class WidgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('widgets')->truncate();
        DB::table('widgets')->insert([
            ['name' => 'menu','place'=>'MAIN_MENU','disabled'=>0,'object_id'=>null],
            ['name' => 'slider','place'=>'CONTENT','disabled'=>1,'object_id'=>null],
            ['name' => 'html', 'place'=>'LEFT_COL', 'disabled'=>1, 'object_id'=>1],
        ]);
    }
}
