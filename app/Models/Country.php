<?php
namespace App\Models;

use App\Models\StudyModel;
use App\Models\Tables\Country as CountryTable;

class Country extends StudyModel
{
    public function __construct(\App\Models\Tables\Country $model)
    {
        $this->model = $model;
    }

}
