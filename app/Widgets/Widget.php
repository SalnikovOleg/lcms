<?php

namespace App\Widgets;

//use App\Models\Tables\UsersWidgets;
use App\Models\Tables\WidgetPlaces;
use App;

class Widget
{
    private $widgets;
    //private $usersWidgets; // model 

    public function __construct()
    {
        $this->widgets = config('widgets');
        //$this->usersWidget = usersWidgets;
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
        $usersWidgets = $this->getUsersWidgets();
        $widgetContent = $this->getWidgetPlaces();
        print_r($widgetContent);
        foreach($usersWidgets as $w) {
            if (isset($this->widgets[$w['name']])) {
                $obj = App::make($this->widgets[$w['name']], $w['data']);
                $method = $w['method'] && method_exists($obj, $w['method']) ?
                    $w['method'] : 'execute';
                $widgretContent[$w['place']] .= $obj->{$method}(); 
            }
        }
        foreach($widgetContent as $place => $content) {
            View::share($place, $content);
        }
    }

    private  function getUsersWidgets() 
    {
        return [
            ['name'=>'menu', 'place'=>'FOOTER_MENU', 'method'=>'', 'data'=>[]]
        ];
    }

    private function getWidgetPlaces() 
    {
        return WidgetPlaces::all()->all();
      //  return ['FOOTER_MENU'=>''];
    }
     
}
