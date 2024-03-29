<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Comic $comic)
    {
        $comics = Comic::all();


        return view('comics.create', compact('comic'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newComic = new Comic();

        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $newComic->writers = $data['writers'];
        $newComic->artists = $data['artists'];

        $newComic->save();

        return redirect()->route('users.show', $newComic->id);


        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        $comics = Comic::all();


        return view('comics.show', compact('comic'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {

        $comics = Comic::all();
        return view('comics.edit', compact('comic'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic = Comic::findOrFail($comic->id);
        $comic->delete();

        //
    }
}
