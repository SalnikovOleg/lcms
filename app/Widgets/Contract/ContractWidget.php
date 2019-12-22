<?php

namespace App\Widgets\Contract;

interface ContractWidget
{

    /**
     * return view('widgets.widgetName', ['data'=>$data]);
     */
    public function execute($object_id);
}
