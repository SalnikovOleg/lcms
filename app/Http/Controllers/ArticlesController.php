<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticlesLang;

class ArticlesController extends Controller
{
    public function index($id='default')
    {
        $articles = ArticlesLang::all()->all();
        print_r( $articles);
    }

}
