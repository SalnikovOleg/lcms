<?php

namespace App\Widgets;

use App\Widgets\Contract\ContractWidget;

class MenuWidget implements ContractWidget
{
    private $params;
    public function __construct(array $params=[])
    {
        $this->params = $params;
    }

    public function execute()
    {
        //get items from model
        $items =[['id'=>1, 'name' =>'item1'],['id'=>2,'name'=>'item2']];
        return view('widgets.menu', ['items'=>$items]);
    }

}
