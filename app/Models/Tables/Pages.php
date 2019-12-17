<?php

namespace App\Models\Tables;

use Illuminate\Database\Eloquent\Model;
use App;

class Pages extends Model
{  
    public function content() {
       return $this->hasOne('App\Models\Tables\PagesLang', 'id')->where('lang', App::getLocale());
    }
}
