<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class Contacts extends Controller
{
  
    public function index()
    {   
        $options = App::make('options');
        $contacts = $options->getByGroup('contacts');
        $data = [
            'title' => trans('Contacts'),
            'email' => $options->get('domain'),
            'phones' => json_decode($contacts['phones']),
            'address' => $contacts['address'],
            'meta' => [
                'meta_title' => trans('Contacts'),
                'meta_keywords' => '',
                'meta_description' => ''
            ],
        ];

       return view('contacts', $data);
    }
}
