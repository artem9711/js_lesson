<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [
            [
                'id' => 1,
                'name' => 'Иван',
                'age' => 20,
                'job' => 'Парикмахер',
            ],
            [
                'id' => 2,
                'name' => 'Наталья',
                'age' => 21,
                'job' => 'Бариста',
            ],
            [
                'id' => 3,
                'name' => 'Ольга',
                'age' => 24,
                'job' => 'Повар',
            ],
        ];

        return $persons;
    }
}
