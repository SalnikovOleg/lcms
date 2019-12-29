<?php 
namespace App\Traits;

trait PageContent
{
    public function getMeta($model) 
    {
        return [
            'title' => $model->content->meta_title,
            'description' => $model->content->meta_description,
            'keywords' => $model->content->meta_keywords,
        ];
    }
}
