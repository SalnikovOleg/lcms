<?php

use Illuminate\Database\Seeder;

class OptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('options')->truncate();
        DB::table('options')->insert([
        ['key'=>'title', 'lang'=>'ru', 'value'=>'Study Bridge', 'group'=>'global'],
        ['key'=>'copyright', 'lang'=>'ru', 'value'=>'© 2011 - STUDY BRIDGE - образование за рубежом', 'group'=>'global'],
        ['key'=>'meta_title', 'lang'=>'ru', 'value'=>'Study Bridge', 'group'=>'meta'],
	['key'=>'meta_description', 'lang'=>'ru', 'value'=>'Study abroad', 'group'=>'meta'],
        ['key'=>'meta_keywords', 'lang'=>'ru', 'value'=>'', 'group'=>'meta'],
        ['key'=>'phones', 'lang'=>'ru', 'value'=>'[{"code":"phone","number":"+38 (095) 166-65-98"},{"code":"vodafone","number":"+38 (050) 166-65-98"},{"code":"kyevstar","number":"+38 (098) 513-11-15"}]', 'group'=>'contacts'],
        ['key'=>'email_admin', 'lang'=>'ru', 'value'=>'salnikov_oleg@ukr.net', 'group'=>'contacts'],
        ['key'=>'email_info', 'lang'=>'ru', 'value'=>'info@studybridge.com', 'group'=>'contacts'],
        ['key'=>'subject_info', 'lang'=>'ru', 'value'=>'subject info', 'group'=>'contacts'],
        ['key'=>'email_order', 'lang'=>'ru', 'value'=>'info@studybridge.com', 'group'=>'contacts'],
        ['key'=>'subject_order', 'lang'=>'ru', 'value'=>'subject order', 'group'=>'contacts'],
        ['key'=>'email_webinar', 'lang'=>'ru', 'value'=>'info@studybridge.com', 'group'=>'contacts'],
        ['key'=>'subject_webinar', 'lang'=>'ru', 'value'=>'subject webinar', 'group'=>'contacts'],
        ['key'=>'email_meeting', 'lang'=>'ru', 'value'=>'info@studybridge.com', 'group'=>'contacts'],
        ['key'=>'subject_meeting', 'lang'=>'ru', 'value'=>'subject meeting', 'group'=>'contacts'],
        ['key'=>'address', 'lang'=>'ru', 'value'=>'01001, г. Киев ул. Эспланадная 20, оф. 407', 'group'=>'contacts'],
        ]);
    }
    
}
