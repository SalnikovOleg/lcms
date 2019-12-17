<?php

namespace App\Models\Tables;

use Illuminate\Database\Eloquent\Model;

class MenuItems extends Model
{

    public static function getActiveByMenuType($menutype_id)
    {
        return self::where('menutype_id',$menutype_id)
            ->where('disabled',0)
            ->where('deleted', 0)
            ->orderBy('parent')
            ->get(['id','parent','node','name','url']);
    }

}
