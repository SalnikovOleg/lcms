<?php                                                                               
namespace App\Http\Controllers;

use Illuminate\Http\Request;                                                        use App;

class PagesController extends Controller
{
    public function index($id='default')
    {

        return 'Pages ' . App::getLocale();
    }

}
