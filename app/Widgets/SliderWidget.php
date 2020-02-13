<?php

namespace App\Widgets;

use App\Widgets\Contract\ContractWidget;
use App\Models\Tables\Slider;
use App\Models\Tables\Slides;

class SliderWidget implements ContractWidget
{
    private $view = 'widgets.slider';
    
    //name for convenience 
    //engine name of  js plugin  or animation method
    //params for animation (interval, etc)

    public function execute($object_id)
    {
        $slider = Slider::find((int)$object_id;);

        view($this->view, [
            'name' => $slider->name,
            'engine' => $slider->engine,
            'params'=>json_decode($slider->params), 
            'slides'=> $slider->slides,
        ]);
    }
}
