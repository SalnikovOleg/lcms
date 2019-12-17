<?php

use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->truncate();
        DB::table('pages_langs')->truncate();
	    DB::table('pages')->insert([
            [
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'parent' => null,
            'node' => true,
            'user_id' => 1,
            'url' => 'pages'
		    ],
            [
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'parent' => 1,
            'node' => true,
            'user_id' => 1,
            'url' => ''
            ],
            [
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'parent' => 2,
            'node' => false,
            'user_id' => 1,
            'url' => ''
            ],
            [
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'parent' => 2,
            'node' => false,
            'user_id' => 1,
            'url' => ''
            ],
        ]);
        DB::table('pages_langs')->insert([
            [
                'id' => 1,
                'lang' => 'ru',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'name' => 'Pages',
                'meta_title' => 'Pages',
                'meta_description' => '',
                'meta_keywords' => '',
                'img' => '',
                'img_alt' => ''
            ],
            [
                'id' => 2,
                'lang' => 'ru',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'name' => 'Widgets',
                'meta_title' => '',
                'meta_description' => '',
                'meta_keywords' => '',
                'img' => '',
                'img_alt' => ''
            ]
        ]);
        DB::table('pages_langs')->insert([
            [
                'id' => 3,
                'lang' => 'ru',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'name' => 'phones',
                'description' => '',
                'text' => 'list of phone numbers',
                'meta_title' => '',
                'meta_description' => '',
                'meta_keywords' => '',
                'img' => '',
                'img_alt' => ''
            ],
            [
                'id' => 4,
                'lang' => 'ru',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'name' => 'social',
                'description' => '',
                'text' => 'list of social buttons',
                'meta_title' => '',
                'meta_description' => '',
                'meta_keywords' => '',
                'img' => '',
                'img_alt' => ''
            ],
        ]);
    }
}
