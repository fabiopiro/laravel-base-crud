<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// IMPORTO IL MODEL!!!
use App\Comic;
// IMPORTO IL MODEL!!!

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // INDEX INDEX INDEX
        // index.blade.php

        // COMICS!!!
        // $comics = Comic::all();
        $comics = Comic::paginate(4);
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {   
        // OPZIONI
        // 1: find e abort
        // $beer = Beer::find($id);
        // if($beer) {
        //     return view("beers.show", compact('beer'));
        // }
        // abort(404, "Not Found");

        // 2: findOrFail
        // $beer = Beer::findOrFail($id);
        // return view("beers.show", compact('beer'));

        // 3: ricerca per slug
        // $beer = Beer::where('slug', $slug)->firstOrFail();

        // 3b: ricerca per slug senza gestione eccezione
        // $beer = Beer::where('slug', $slug)->first();
        // if($beer) {
        //     return view("beers.show", compact('beer'));
        // }
        // abort(404, "Not Found");

        // 4: dependency injection, Laravel per noi sta facendo:
        // $beer = Beer::findOrFail($id);
        // OPZIONI


        //SHOW SHOW SHOW
        return view('comics.show' , compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
