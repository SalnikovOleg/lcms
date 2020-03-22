<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;                                                        use App;

class NewsController extends Controller
{
    public function index($id='default')
    {
        return 'News ' . App::getLocale();
    }

}
