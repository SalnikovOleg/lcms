<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tables\Country;
use App\Traits\PageContent;
//use App\Models\Tables\Programm;
//use App\Models\Tables\VariousLinks;
//use App\Widgets\FormWidget;

class CountryController extends Controller
{
    use PageContent;

    public function __construct()
    {
    }

    public function index($url)
    {
        $country = new Country();
    $res =    $country->getByUrl($url);
        var_dump( $res);
        die();
        $programs = null; //Programm::getByCountry($country->id);
        $links = null; //VariousLinks::get();
        $form = null; //FormWidget::execute(1);
        return view('study.country', [
            'page' => $country->content,
        //    'meta' => $this->getMeta($country->content),
            'programs' => $programs,
            'links' => $links,
            'form' => $form
        ]);
    }
}
