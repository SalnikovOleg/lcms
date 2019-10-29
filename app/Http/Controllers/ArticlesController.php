<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesController extends Controller
{
    private $articles; 
    public function __construct(Articles $articles)
    {
	    $this->articles = $articles;
    }
    
    public function index($url='articles')
    {
        $this->articles->loadByUrl($url);
        $page = $this->articles->getPage();
        if ($page->node == 1) {
            return view('articles.list', 
                [
                    'page' => $page, 
                    'items' => $this->articles->getItems(),
                    'meta' => $this->articles->getMeta(),
                ]);
        } else {
            return view('articles.page', 
                [
                    'page' => $page,
                    'meta' => $this->articles->getMeta(),
                ]);
        }
    }

}
