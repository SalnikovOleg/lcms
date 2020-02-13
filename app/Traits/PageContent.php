<?php 
namespace App\Traits;
//use App\Models\Tables\Options;

trait PageContent
{
    public function getMeta($model) 
    {
        if (isset($model->content)) {
            return [
                'title' => $model->content->meta_title,
                'description' => $model->content->meta_description,
                'keywords' => $model->content->meta_keywords,
            ];
        } else {
            return [             
                'title' => isset($model->meta_title) 
                    ? $modelt->meta_title
                    : '',
                'description' => isset($model->meta_description)
                    ? $model->meta_description
                    : '',   
                'keywords' => isset($model->meta_keywords) 
                    ? $model->meta_keywords
                    : '',
            ];
        }
    }
}
