<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Support\Facades\DB;
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
        // $Retros = Game::where('user_id', Auth::id())->latest('updated_at')->paginate();
        $Retros = Game::paginate(5);
        // dd($Retros);
        return view('RetroVibe.index')->with('Retros', $Retros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('RetroVibe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'game_title' => 'required',
        //     'description' => 'required|max:500',
        //     'creator' => 'required',
        //     'edition' => 'required',
        //     'release_date' => 'required',
        //     'platform' => 'required',
        //     'developer' => 'required',
        //     'game_image' => 'file|image'
        // ]);

        $Retro_image = $request->file('game_image');
        $extension = $Retro_image->getClientOriginalExtension();
        $filename = date('Y-m-d-His') . '_' . $request->input('game_title') . '.' . $extension;

        $path = $Retro_image->storeAs('public/images', $filename);
// dd( $request->input('edition'));
        Game::create([
            // Ensure you have the use statement for 
            // Illuminate\Support\Str at the top of this file.
            // 'uuid' => Str::uuid(),
            'edition' => $request->input('edition'),
            'game_title' => $request->input('game_title'),
            'description' => $request->input('description'),
            'game_image' => $filename,
            'creator' => $request->input('creator'),
            'category' => $request->input('category'),
            'platform' => $request->input('platform'),
            'release_date' => $request->release_date

        ]);

        return to_route('RetroVibe.index');
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

        // if ($Retro->user_id != Auth::id()) {
        //     return abort(403);
        // }

        

        return view('RetroVibe.show', ['game' => $Retro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        if ($game->user_id != Auth::id()) {
            return abort(403);
        }

        return view('RetroVibe.edit',['game' => $game]);
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
            'game_title' => 'required',
            'description' => 'required|max:500',
            'category' => 'required',
            'creator' => 'required',
            'edition' => 'required',
            'release_date' => 'required',
            'platform' => 'required',
            'developer' => 'required',
            'game_image' => 'file|image'
        ]);

        // dd($request);
        $Retro_image = $request->file('game_image');
        $extension = $Retro_image->getClientOriginalExtension();
        $filename = date('Y-m-d-His') . '_' . $request->input('game_title') . '.' . $extension;


        $path = $Retro_image->storeAs('public/images', $filename);

        $Retro->update([

            'game_title' => $request->game_title,
            'description' => $request->description,
            'category' => $request->category,
            'game_image' => $filename,
            'edition' => $request->edition,
            'creator' => $request->creator,
            'platform' => $request->platfrom,
            'release_date' => $request->release_date,
            'category' => $request->category,

        ]);



        return to_route('RetroVibe.show', $Retro)->with('success', 'Game Info updated successfully');
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

        return to_route('RetroVibe.index')->with('success', 'Game Info deleted successfully');
    }
}
