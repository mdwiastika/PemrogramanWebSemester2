<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Journals;

class HomeController extends Controller
{
    public function index()
    {
        $data['journals'] = [
            new Journals('Basic dalam Pemrograman', 2021),
            new Journals('Konsep OOP', 2022),
            new Journals('Konsep MVC', 2023),
        ];
        $this->render('index', $data);
    }
}
