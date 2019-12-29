<?php

namespace App\Models\Tables;

use App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articles extends Model
{ 
    use SoftDeletes;
    public function content() {
       return $this->hasOne('App\Models\Tables\ArticlesLang', 'id')->where('lang', App::getLocale());
    }
}
