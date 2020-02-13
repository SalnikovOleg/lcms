<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programm;
use App\Traits\PageContent;
use App\Models\School;
//use App\Widgets\FormWidget;

class ProgrammController extends Controller
{
    use PageContent;

    public function index($url)
    {
        $programm = new Programm();
        $programm->getByUrl($url);
        $schools = null; //School::getByCountryCategory();
        //with pagination

        $form = null; //FormWidget::execute(1);
        return view('study.programm', [
            'page' => $programm,
            'meta' => $this->getMeta($programm),
            'schools' => $schools,
            'form' => $form
        ]);
    }
}
