<?php
namespace App\Models;
use App;

class StudyModel
{
    protected $model;
    
    public function getByUrl($url)
    {
        return  $this->model->where('url', $url)->firstOrFail();
    }
}
