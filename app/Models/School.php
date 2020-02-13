<?php
namespace App\Models;

use App\Models\StudyModel;
use App\Models\Tables\School as SchoolTable;

class School extends StudyModel
{
    public function __construct(\App\Models\Tables\School $model)
        $this->model = $model;
    }

}