<?php

namespace App\Widgets;

use App\Models\Tables\UsersWidgets;
use App\Models\Tables\WidgetPlaces;
use App;
use View;

class Widget
{
    private $widgets;

    public function __construct()
    {
        $this->widgets = config('widgets');
    }

    public function show($name, $data=[])
    {
        if(isset($this->widgets[$name])) {
           return  App::make($this->widgets[$name], $data)->execute();
        }
    }
    /**
        method select configure table and loop on it
        create and execute given widgetobgect
        to construct add WidgetsModel
     */ 
    public function showWidgets()
    {
        $usersWidgets = UsersWidgets::get()->where('disabled',0)->all();
        $widgetContent = $this->getWidgetPlaces();
   
        foreach($usersWidgets as $w) {
            if (isset($this->widgets[$w->name])) {
                $obj = App::make($this->widgets[$w->name]);
                $method = $w->method && method_exists($obj, $w->method) ?
                                                 $w->method : 'execute';
                if (!isset($widgetContent[$w->place])) {
                     $widgetContent[$w->place] = ''; 
                } 
                $widgetContent[$w->place] .= $obj->{$method}($w->object_id);
            }
        }

        foreach($widgetContent as $place => $content) {
            View::share($place, $content);
        }
    }

    private function getWidgetPlaces() 
    {
        $dataset =  WidgetPlaces::all()->pluck('name')->toArray();
        return array_map(function($item) {
            return $item = '';
        }, array_flip($dataset) );
    }
     
}
