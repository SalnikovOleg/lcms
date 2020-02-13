<?php
namespace App\Models;

use App\Models\StudyModel;
use App\Models\Tables\Programm as ProgrammTable;

class Programm extends StudyModel
{
    public function __construct(\App\Models\Tables\Programm $model)
        $this->model = $model;
    }

}