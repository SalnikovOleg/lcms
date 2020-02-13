<?php

namespace App\Models\Tables;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Tables\Text;
use App;

class School extends Model
{
    use SoftDeletes;
    
    public function content()
    {
        return $this->morphOne('App\Models\Tables\Text', 'content')
                    ->where('lang', App::getLocale());
    }
}
