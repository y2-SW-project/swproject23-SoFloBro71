<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RetroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Fetch motes in order of when they were last updated - latest updated returned first
        $Retros = Game::where('user_id', Auth::id())->latest('updated_at')->paginate();
        // dd($Retros);
        return view('games.index')->with('games', $Retros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.create');
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
            'title' => 'required',
            'description' => 'required|max:500',
            'category' => 'required',
            'creator' => 'required',
            // 'game_image' => 'file|image|dimensions:width300,height=400',
            'game_image' => 'file|image',
        ]);

        $Retro_image = $request->file('game_image');
        $extension = $Retro_image->getClientOriginalExtension();
        $filename = date('Y-m-d-His') . '_' . $request->input('title') . '.' . $extension;

        $path = $Retro_image->storeAs('public/images', $filename);

        Game::create([
            // Ensure you have the use statement for 
            // Illuminate\Support\Str at the top of this file.
            'uuid' => Str::uuid(),
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'game_image' => $filename,
            'creator' => $request->developer,
            'category' => $request->category

        ]);

        return to_route('games.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Game $Retro)
    {
        // /Game | findOrFail() firstOrFail() return a 404 not found view if not found.
        // This is OK for web application development, but not for API development as
        // API's return JSON not Views.

        if ($Retro->user_id != Auth::id()) {
            return abort(403);
        }

        return view('games.show')->with('game', $Retro);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $Retro)
    {
        if ($Retro->user_id != Auth::id()) {
            return abort(403);
        }

        return view('games.edit')->with('game', $Retro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $Retro)
    {

        if ($Retro->user_id != Auth::id()) {
            return abort(403);
        }

        $request->validate([
            'title' => 'required',
            'description' => 'required|max:500',
            'category' => 'required',
            'creator' => 'required',
            'game_image' => 'file|image'
        ]);

        // dd($request);
        $Retro_image = $request->file('game_image');
        $extension = $Retro_image->getClientOriginalExtension();
        $filename = date('Y-m-d-His') . '_' . $request->input('title') . '.' . $extension;


        $path = $Retro_image->storeAs('public/images', $filename);

        $Retro->update([

            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'game_image' => $filename,
            'creator' => $request->developer
        ]);



        return to_route('games.show', $Retro)->with('success', 'Game Info updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $Retro)
    {

        if ($Retro->user_id != Auth::id()) {
            return abort(403);
        }

        $Retro->delete();

        return to_route('games.index')->with('success', 'Game Info deleted successfully');
    }
}
