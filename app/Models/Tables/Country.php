<?php

namespace App\Models\Tables;

use Illuminate\Database\Eloquent\Model; 
use App\Models\Tables\Text;
use Illuminate\Database\Eloquent\SoftDeletes;
use App;

class Country extends Model
{
    use SoftDeletes;

    //private $module_id = 4;
   // public $content;

    public function getByUrl($url)
    {
       return $this->where('url', $url)->firstOrFail();
     /*   $this->content = Text::where('module_id', $this->module_id)
                ->where('object_id', $this->object_id)
                ->where('lang', App::getLocale())->first();
      */
        return $this;
     
    
    }

}
