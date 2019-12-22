<?php
namespace App\Widgets;

use App\Widgets\Contract\ContractWidget;
use App\Models\Tables\PagesLang;
use App;

class HtmlWidget implements ContractWidget
{
    private $pageId;

    public function execute($object_id)
    {
        $this->pageId = $object_id ?? 0; 

        $page = PagesLang::where('id',$this->pageId)
                ->where('lang', App::getLocale())
                ->first();

        if (is_null($page)) {
            return '';
        }

        return view('widgets.htmlwidget', ['content' => $page->text]);
    }
}
