<?php

namespace App\Http\Controllers;
use Inertia\Inertia;


class HomeController extends Controller
{
   
    public function show()
    {
        return Inertia::render('Home');
    }

    public function create()
    {

        return Inertia::render('Home');

    }

    public function details(string $id)
    {
        return Inertia::render('Details', [
            'id' => $id
        ]);
    }


    public function care(string $id)
    {
        return Inertia::render('CatCare', [
            'id' => $id
        ]);
    }
}