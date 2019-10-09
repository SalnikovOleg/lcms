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
    
    public function index($url='')
    {
       $article = $this->articles->getByUrl($url);
       echo $article->url. ' ' .$article->page->name.'<br>';
        

/*    
        
     $data =[
    	    'meta' => $articles->meta(),
    	    'title' => $articles->title(),
    	    'list' => $articles->items(),
    	    ];
    	if ($articles->isPage()) {
    	    $data['text'] = $articles->text();
    	    return view('articles.page', $data);
    	} else {
    	    return view('articles.list', $data);
        }
        */
    }

}
