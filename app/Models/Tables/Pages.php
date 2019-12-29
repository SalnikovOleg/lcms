<?php

namespace App\Models\Tables;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App;


class Pages extends Model
{  
    use SoftDeletes;
    public function content() {
       return $this->hasOne('App\Models\Tables\PagesLang', 'id')->where('lang', App::getLocale());
    }
}
