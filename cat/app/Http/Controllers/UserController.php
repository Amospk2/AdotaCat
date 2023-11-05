<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCatRequest;
use App\Models\Cat;
use Inertia\Inertia;

class UserController extends Controller
{
    public function show()
    {
        $cat = new Cat;

        $cat->name = "MyCat";
        $cat->history = "New Cat In Our House";
        $cat->save();

        return Inertia::render('Home', [
            'user'=> array('nome' => 'amos'),
            'cats'=> Cat::orderBy('created_at')->first()
        ]);
    }

    public function create(UpdateCatRequest $request)
    {
        $cat = new Cat;

        $cat->name = "MyCat";
        $cat->history = "New Cat In Our House";

        $cat->photo = $request->file('avatar')->store('avatar', 'public');

        $cat->save();

        return Inertia::render('Home', [
            'cats'=> $cat
        ]);
        
    }
}