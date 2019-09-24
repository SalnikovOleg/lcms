<?php                                                                               
namespace App\Http\Controllers;

use Illuminate\Http\Request;                                                        use App;

class MainController extends Controller
{
    public function index($id='default')
    {

        return 'Main ' . App::getLocale();
    }

}
