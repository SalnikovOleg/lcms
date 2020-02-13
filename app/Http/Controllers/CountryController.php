<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Traits\PageContent;
//use App\Models\Programm;
//use App\Models\VariousLinks;
//use App\Widgets\FormWidget;

class CountryController extends Controller
{
    use PageContent;

    public function index($url, \App\Models\Country $country)
    {
        $country = $country->getByUrl($url);
        
        $programs = null; //Programm::getByCountry($country->id);
        $links = null; //VariousLinks::get();
        $form = null; //FormWidget::execute(1);

        return view('study.country', [
            'page' => $country,
            'meta' => $this->getMeta($country->content->toArray()),
            'programs' => $programs,
            'links' => $links,
            'form' => $form
        ]);
    }
}
