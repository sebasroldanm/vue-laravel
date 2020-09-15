<?php

namespace App\Http\Controllers;

use App\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function getIdea()
    {
        return Idea::orderBy('id', 'DESC')->get();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required'
        ]);
        Idea::created($request->all());
    }
}
