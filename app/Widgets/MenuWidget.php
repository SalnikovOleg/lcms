<?php

namespace App\Widgets;

use App\Widgets\Contract\ContractWidget;
use App\Models\Tables\Menu;

class MenuWidget implements ContractWidget
{
    private $items;
    private $menuType;

    public function execute($object_id)
    {
        $this->menuType = $object_id ?? 1;
        $view = $this->menuType == 1 ? 'widgets.menu' : 'widgets.links';
        $this->items = Menu::getActiveByMenuType($this->menuType)->toArray();
        $items = [];
        $items = $this->getSubitems(null, $items);
         
        return view($view, ['items'=>$items]);
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
