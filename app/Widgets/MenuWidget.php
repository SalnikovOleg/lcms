<?php

namespace App\Widgets;

use App\Widgets\Contract\ContractWidget;
use App\Models\Tables\Menu;
use App\Models\Tables\Menutype;

class MenuWidget implements ContractWidget
{
    private $items;
    private $menuType;

    public function execute($object_id)
    {
        $menutype = Menutype::find($object_id);
        $this->items = Menu::getActiveByMenuType($object_id)->toArray();
        $items = [];
        $items = $this->getSubitems(null, $items);

        return view($menutype->view, ['items'=>$items]);
    }

    private function getSubitems($parent, &$items)
    {
        $subItems = array_filter($this->items,
            function($val) use ($parent) {
                return $val['parent'] == $parent;
            });

        if (count($subItems)==0) return $items;

        foreach($subItems as $row) {
            $items[$row['id']] = $row;
            $items[$row['id']]['items'] = [];
            if ($row['node']) {
                $this->getSubitems($row['id'], $items[$row['id']]['items']);
            }
        }

        return $items;
    }
}
