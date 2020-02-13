<?php
namespace App\Models;

use App\Models\StudyModel;
use App\Models\Tables\Category as CategoryTable;

class Category extends StudyModel
{
    public function __construct(\App\Models\Tables\Category $model)                                                       {
        $this->model = $model;

    }

}