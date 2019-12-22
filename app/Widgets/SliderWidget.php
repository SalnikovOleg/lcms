<?php

namespace App\Widgets;

use App\Widgets\Contract\ContractWidget;
use App\Models\Tables\Slider;
use App\Models\Tables\Slides;

class SliderWidget implements ContractWidget
{
    private $view = 'widgets.slider';
    private $id;
    private $items;

    public function execute($object_id)
    {
        $this->id = (int)$object_id;
        $slider = Slider::find($this->id);
        $slides = Slides::where('slide_id', $thid->id)->get()->all();
        view($this->view, ['slider'=>$slider, 'slides'=>$slides]);      
    }
}
