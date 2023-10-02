<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicsList = Comic::all();
        
        return view('index',["comics"=>$comicsList]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            "title"=>["required","string","max:100"],
            "description"=>["required","string","max:255"],
            "thumb"=>["nullable","string"],
            "price"=>["required","decimal:2,5"],
            "series"=>["required","string","max:50"],
            "sale_date"=>["nullable","date"],
            "type"=>["nullable","string",Rule::in(['graphic novel', 'comic book', 'comic strips', 'tankōbon'])],
            "artists"=>["nullable","string"],
            "writers"=>["nullable","string"],


        ]);
        
        $newComic = new Comic();
        
        $data["artists"]=explode(",", $data["artists"]);
        $data["writers"]=explode(",", $data["writers"]);
        
        $newComic->fill($data);
        dump($newComic);
        $newComic->save();

        return redirect()->route('show', $newComic->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        $card = Comic::findOrFail($id);
        return view("show",["cardComics"=>$card]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
