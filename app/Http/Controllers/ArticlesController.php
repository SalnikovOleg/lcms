<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;
use App\Traits\PageContent;

class ArticlesController extends Controller
{
    use PageContent;

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
                    'meta' => $this->getMeta($page),
                ]);
        } else {
            return view('articles.page', 
                [
                    'page' => $page,
                    'meta' => $this->getMeta($page),
                ]);
        }
    }

}
