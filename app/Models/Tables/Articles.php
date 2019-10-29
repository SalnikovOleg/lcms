<?php

namespace App\Models\Tables;

use App;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tables\ArticlesLang;

class Articles extends Model
{
    public function content() {
       return $this->hasOne('App\Models\Tables\ArticlesLang', 'id')->where('lang', App::getLocale());
    }
}
