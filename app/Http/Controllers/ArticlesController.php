<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ArticlesController extends Controller
{
    public function index($id='default')
    {
        
        return 'Articless ' . App::getLocale();
    }

}
