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
        $phones = json_decode($contacts['phones'], true);

        array_walk($phones, function(&$item) {
            $item['clear_number'] = str_replace(['-','(',')'], ['','',''], $item['number']);
        });
        return view('widgets.phones', [
            'phones' => $phones
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
