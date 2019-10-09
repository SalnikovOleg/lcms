<?php
namespace App\Models;

use App;

class PagesTree {
    protected $model;

    public function getByUrl($url) {
        $entity = $this->model->where('url', $url)->firstOrFail();
        //
    }

    public function getByParent($parent)
    {
        return $this->model->where('parent', $parent)->get();    
    }
    
    public function get($id) 
    {
        return $this->model->find((int)$id);
    }
}
