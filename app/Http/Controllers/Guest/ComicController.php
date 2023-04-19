<?php

namespace App\Http\Controllers\Guest;

use App\Models\Comic;
use App\Http\Controllers\Guest\ComicController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    public function index(){
        $comics = Comic::all();
        $data = [
            'comics' => $comics
        ];

        return view('pages.index', $data);
    }

    public function show(Comic $comic){

        $data = [
            'comic' => $comic
        ];

        return view('pages.show', $data);
    }

    public function create(){

        return view('pages.create');
    }

    public function store(Request $request){

        $data = $request->validate([
            'title' => 'required|max:90|min:3',
            'description' => 'nullable|string',
            'thumb' => 'required|max:255|url',
            'price' => 'required',
            'series' => 'required|max:50',
            'sale_date' => 'required',
            'type' => [
                'required',
                Rule::in(['graphic','book'])
            ], //graphic novel o comic book
            
        ]);

        // $newComic = $request->all();

        // $newComic = new Comic();

        // $newComic->title = $data['title'];
        // $newComic->description = $data['description'];
        // $newComic->thumb = $data['thumb'];
        // $newComic->price = $data['price'];
        // $newComic->series = $data['series'];
        // $newComic->sale_date = $data['sale_date'];
        // $newComic->type = $data['type'];
      
        // $newComic->save();
        $newComic = Comic::create($data);

        return redirect()->route('comics.index');
    }

    public function edit (Comic $comic){

        $data = [
            'comic' => $comic
        ];

        return view('pages.edit', $data);
    }

    public function update (Request $request, Comic $comic){

        $data = $request->validate([
            'title' => 'required|max:90|min:3',
            'description' => 'nullable|string',
            'thumb' => 'required|max:255|url',
            'price' => 'required',
            'series' => 'required|max:50',
            'sale_date' => 'required',
            'type' => [
                'required',
                Rule::in(['graphic','book'])
            ], //graphic novel o comic book
            
        ]);

        // $data = $request->all();

        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->thumb = $data['thumb'];
        // $comic->price = $data['price'];
        // $comic->series = $data['series'];
        // $comic->sale_date = $data['sale_date'];
        // $comic->type = $data['type'];
      
        // $comic->save();
        $comic->update($data);

        return redirect()->route('comics.index');
    }

}
