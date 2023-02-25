<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic as Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comics = Comic::all();
        return view('partials.current_series', compact('comics'));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        $single_comic = [
            'comic' => $comic
        ];
        return view('partials.single',$single_comic);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partials.your_comic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $request->validate([
            'title' => 'required|max:50',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'required|max:255',
            'series' => 'required|max:50',
            'sale_date' => 'required|max:255',
            'type' => 'required|max:50',
        ]);


        $form_data = $request->all();


        $yourComics = new Comic();
        /* $yourComics->title = $form_data['title'];
        $yourComics->description = $form_data['description'];
        $yourComics->thumb = $form_data['thumb'];
        $yourComics->price = $form_data['price'];
        $yourComics->series = $form_data['series'];
        $yourComics->sale_date = $form_data['sale_date'];
        $yourComics->type = $form_data['type']; */

        $yourComics->fill($form_data);
        $yourComics->save();

        return redirect()->route('current_series.show' , $yourComics['id']);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        $single_comic = [
            'comic' => $comic
        ];
        return view('partials.comic_edit',$single_comic);
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

        $comic = Comic::findOrFail($id);

        $request->validate([
            'title' => 'required|max:50',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'required|max:255',
            'series' => 'required|max:50',
            'sale_date' => 'date',
            'type' => 'required|max:50',
        ]);


        $form_data = $request->all();

        $comic->update($form_data);

        return redirect()->route('current_series.show' , $comic['id']);
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