
<?php

namespace App\Widgets;

use App\Widgets\Contract\ContractWidget;
use App\Models\Tables\PagesLang;

class HtmlWidget implements ContractWidget
{

    public function execute($params=[])
    {
        $pageId = isset($params['object_id']) 
            ? (int)$params['object_id'] : 0;
      
        $page = Pages::get()->where('id',$pageId)->where('lang', App:getLocale());

        return $page->text;
    }
}
