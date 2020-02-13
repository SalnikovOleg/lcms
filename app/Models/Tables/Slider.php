<?php

namespace App\Models\Tables;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tables\Slides;
use Illuminate\Database\Eloquent\SoftDeletes;
use App;

class Slider extends Model
{
    use SoftDeletes;
   
    //name for convenience 
    //engine name of  js plugin  or animation method
    //params for animation (interval, etc)
    
    public function slides() 
    {
        return $this->hasMany('App\Models\Tables\Slifes')
                    ->where('lang', App::getLocale());
    }
}
