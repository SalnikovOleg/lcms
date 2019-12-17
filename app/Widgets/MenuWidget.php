<?php

namespace App\Widgets;

use App\Widgets\Contract\ContractWidget;
use App\Models\Tables\MenuItems;

class MenuWidget implements ContractWidget
{
    private $items;

    public function execute($params=[])
    {
        $menuType = isset($params['object_id']) && $params['object_id']
            ? $params['object_id'] : 1;
        $view = isset($params['view']) 
            ? $params['view'] : ($menuType == 1 ? 'menu' : 'links');
        
        $this->items = MenuItems::getActiveByMenuType($menuType)->toArray();
        $items = [];
        $items = $this->getSubitems(null, $items);
         
        return view('widgets.'.$view, ['items'=>$items]);
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
