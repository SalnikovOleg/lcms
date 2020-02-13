<?php
namespace App\Models;

use App\Models\Tables\Options as OptionsTable;
use App;

class Options 
{
    private $items;

    public function __construct() 
    {
        $this->items = OptionsTable::where('lang', App::getLocale())->get();
    }

    /**
     * returns collection of models
    **/
    public function getAll()
    {
        return $this->toArray();
    }

    /**
     * returns array indexed by option key
     */
    private function toArray() 
    {
        $result = [];
        foreach($this->items as $item) {
            $result[$item->key] = $item->value;
        }
        return $result;
    }

    /**
     * return array filtered by group
     * */
    public function getByGroup($group)
    {
        $result = [];
        foreach($this->items as $item) {
            if ($item->group == $group) { 
                $result[$item->key] = $item->value;
            }
        }
        return $result;
    }
    
    public function get($key)
    {
        //TODO search in collection
        $items = $this->toArray();
	    return isset($items[$key]) ? $items[$key] : null;
    }
}
