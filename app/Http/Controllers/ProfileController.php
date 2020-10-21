<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostProfileRequest;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Profile::all();
        return view('profiles.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostProfileRequest $request)
    {
        try {

            Profile::create([
                'name' => $request->name,
                'age' => $request->age,
                'artist' => $request->artist,
                'song' => $request->song

            ]);

            return redirect()->route('profile.index')->with('success', 'Created Data');

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
        $data = Profile::findOrFail($id);
        return view('profiles.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostProfileRequest $request, $id)
    {
        $data = Profile::find($id);

        $data->name = $request->name;
        $data->gender = $request->gender;
        $data->age = $request->age;
        $data->religion = $request->religion;
        $data->address = $request->address;
        $data->school = $request->school;
        $data->class = $request->class;

        $data->save();

        return redirect()->route('profile.index')->with('success', 'Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Profile::findOrFail($id)->delete();

        return redirect()->route('profile.index')->with('success', 'Deleted!');

    }
}
