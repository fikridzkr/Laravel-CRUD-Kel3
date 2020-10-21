<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostFavoriteRequest;
use Illuminate\Http\Request;
use App\Models\favorite;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = favorite::all();
        return view('favorite.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('favorite.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            favorite::create([
                'name' => $request->name,
                'age' => $request->age,
                'artist' => $request->artist,
                'song' => $request->song

            ]);

            return redirect()->route('favorite.index')->with('success', 'Created Data');

        } catch (\Exception $e) {
           return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = favorite::findOrFail($id);
        return view('favorite.edit', compact('data'));
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
        $data = favorite::find($id);

        $data->name = $request->name;
        $data->age = $request->age;
        $data->artist = $request->artist;
        $data->song = $request->song;

        $data->save();

        return redirect()->route('favorite.index')->with('success', 'Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        favorite::findOrFail($id)->delete();

        return redirect()->route('favorite.index')->with('success', 'Deleted!');
    }
}
