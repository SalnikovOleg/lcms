<?php

use Illuminate\Database\Seeder;

class menuitems extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menutypes')->truncate();  
        DB::table('menutypes')->insert([
            ['name' => 'main'],
            ['name' => 'left'],
            ['name' => 'bottom1'],
            ['name' => 'bottom2']
        ]);

        DB::table('menu_items')->truncate();
        DB::table('menu_items')->insert([
            [
                'menutype_id'=>1,
                'lang'=>'ru',
                'parent'=>null,
                'node'=>1,
                'name'=>'TopLevel 1',
                'url'=>'',
            ],
            [
                'menutype_id'=>1,
                'lang'=>'ru',
                'parent'=>null,
                'node'=>1,
                'name'=>'TopLevel 2',
                'url'=>'',
            ],
            [
                'menutype_id'=>1,
                'lang'=>'ru',
                'parent'=>1,
                'node'=>null,
                'name'=>'Sublevel 1.1',
                'url'=>'/articles/section_1',
            ],
            [
                'menutype_id'=>1,
                'lang'=>'ru',
                'parent'=>1,
                'node'=>null,
                'name'=>'Sub level 1.2',
                'url'=>'/articles/section_article_1',
            ],
            [
                'menutype_id'=>1,
                'lang'=>'ru',
                'parent'=>2,
                'node'=>null,
                'name'=>'SubLevel 2.1',
                'url'=>'',
            ],
            [
                'menutype_id'=>1,
                'lang'=>'ru',
                'parent'=>null,
                'node'=>null,
                'name'=>'Toplevel 3',
                'url'=>'/articles/indep_article_2',
            ],
        ]);
    }
}
