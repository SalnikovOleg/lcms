
<?php

namespace App\Models;

use App\Models\PagesTree;
use App\Models\Tables\Pages as PagesTable;

class Pages extends Pagestree
{
    function __construct(PagesTable $pagesTable)
    {
        $this->model = $pagesTable;
    }

}
