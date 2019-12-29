<?php

namespace App\Models\Tables;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuItems extends Model
{
    use SoftDeletes;
    
    public static function getActiveByMenuType($menutype_id)
    {
        return self::where('menutype_id',$menutype_id)
            ->where('disabled',0)
            ->orderBy('parent')
            ->get(['id','parent','node','name','url']);
    }

}
