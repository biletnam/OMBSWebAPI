<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        return Movie::all();
    }
 
    public function show($id)
    {
        return Movie::find($id);
    }

    public function store(Request $request)
    {
        return Movie::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Movie = Movie::findOrFail($id);
        $Movie->update($request->all());

        return $Movie;
    }

    public function delete(Request $request, $id)
    {
        $Movie = Movie::findOrFail($id);
        $Movie->delete();

        return 204;
    }
}
