<?php
namespace App\Models;

use App;

class PagesTree {
    protected $model;

    private $page;
    private $items;

    public function getByUrl($url) {
        return $this->model->with('content')->where('url', $url)->firstOrFail();
    }

    public function getByParent($parent)
    {
        return $this->model->with('content')->where('parent', $parent)->get();  
    }
    
    public function getById($id) 
    {
        return $this->model->with('content')->findOrFail((int)$id);
    }

    public function loadByUrl($url)
    {
        $this->page = $this->getByUrl($url);
        if ($this->page->node == 1) {
            $this->items = $this->getByParent($this->page->id);
        }
        return $this;
    }

    public function loadById($id)
    {
        $this->page = $this->getById($id);
        if ($this->page->node == 1) {
            $this->items = $this->getByParent($this->page->id);
        }
        return $this;
    }

    public function getPage()
    {
        return $this->page;
    }
    
    public function getItems()
    {
        return $this->items;
    }

}
