<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();
        DB::table('articles_langs')->truncate();
        DB::table('articles')->insert([
            [
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'parent' => null,
            'node' => true,
            'user_id' => 1,
            'url' => 'section 1'
            ],
            [
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'parent' => 1,
            'node' => false,
            'user_id' => 1,
            'url' => 'section_article_1'
            ],
            [
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'parent' => null,
            'node' => false,
            'user_id' => 1,
            'url' => 'indep_article_2'
            ],
        ]);
        DB::table('articles_langs')->insert(
            [
                'id' => 1,
                'lang' => 'ru',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'name' => 'Рубрика 1',
                'meta_title' => '',
                'meta_description' => '',
                'meta_keywords' => '',
                'img' => '',
                'img_alt' => ''
            ]);
        DB::table('articles_langs')->insert([
            [
                'id' => 2,
                'lang' => 'ru',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'name' => 'Статья первой рубрики',
                'description' => 'краткое описаниепервой статьи',
                'text' => 'полный текст первой статьи первой рубрики',
                'meta_title' => 'мета заглавие первой статьи',
                'meta_description' => 'мета описание первой статьи',
                'meta_keywords' => '',
                'img' => '',
                'img_alt' => ''
            ],
            [
                'id' => 3,
                'lang' => 'ru',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
                'name' => 'Статья вне рубрик',
                'description' => 'краткое описание статьи вне рубрик',
                'text' => 'текст первой и единственной статьи вне рубрик',
                'meta_title' => 'мета заглавие статьи вне рубрики',
                'meta_description' => '',
                'meta_keywords' => '',
                'img' => '',
                'img_alt' => ''
            ],
        ]);
    }
}
