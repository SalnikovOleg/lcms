<?php

namespace App\Models\Tables;

use Illuminate\Database\Eloquent\Model;
use App;

class Text extends Model
{
    public function getContent($module_id, $object_id) 
    {
	return self::where('module_id', $module_id)
		->where('object_id',$object_id)
		->where('lang', App::getLocale())->first();
    }
}
