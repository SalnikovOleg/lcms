<?php
namespace App\Widgets;

use App\Widgets\Contract\ContractWidget;
use App;

class ContactsWidget implements ContractWidget
{

    public function execute($object_id)
    {
        return '';
    }
    
    public function phones()
    {
        $options = App::make('options');
        $contacts = $options->getByGroup('contacts');
        
        return view('widgets.phones', [
            'phones' => json_decode($contacts['phones'])
        ]);
    }

    public function address()
    {
        $options = App::make('options');
        $contacts = $options->getByGroup('contacts');
        
        return view('widgets.address', [
            'phones' => json_decode($contacts['phones']),
            'address' => $contacts['address'],
        ]);
    }
}
