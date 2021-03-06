<?php

namespace App\Http\Controllers;

use App\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function getIdeas()
    {
    	return Idea::orderBy('id', 'DESC')->get();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'descripcion' => 'required'
        ]);
        Idea::create($request->all());
        return;
    }
}
