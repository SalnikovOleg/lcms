<?php
return [
    'morphMap' =>[
        'country' => 'App\Models\Tables\Country',
        'category' => 'App\Models\Tables\Category',
        'programm' => 'App\Models\Tables\Programm',
        'school' => 'App\Models\Tables\School',
    ],
    'modules'=>[
        'articles',
        'news',
        'pages',
        'country',
        'category',
        'programm',
        'school'
    ]
];
