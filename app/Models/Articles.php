<?php

namespace App\Models;

use App\Models\PagesTree;
use App\Models\Tables\Articles as ArticlesTable;

class Articles extends Pagestree
{
    function __construct(ArticlesTable $articlesTable)
    {
        $this->model = $articlesTable;
    }

}
