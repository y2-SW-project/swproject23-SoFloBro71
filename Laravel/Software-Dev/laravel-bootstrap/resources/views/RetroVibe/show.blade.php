
@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Games') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-alert-success>
                {{session('success')}}

            </x-alert-success> 
            
            <div class="flex">
                {{$game}}
                <p class="opacity-70">
                    <strong>Created: </strong> {{ $game->created_at }}
                </p>
                <p class="opacity-70 ml-8">
                    <strong>Updated at: </strong> {{ $game->updated_at }}
                </p>
                {{$game->game_title}}
                {{-- <a href="{{ route('RetroVibe.edit', $Retro) }}" class="btn-link ml-auto">Edit Game</a> --}}
                {{-- <form action="{{ route('RetroVibe.destroy', $Retro->id) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you wish to delete this Game?')">Delete Game</button>
                </form> --}}
            </div>
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td rowspan="6">
                                <img src="{{asset('storage/images/' . $game->game_image)}}" width="150"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-bold">Title </td>
                            <td> {{ $game->game_title}}</td>
                        </tr>
                        <tr>
                            <td class="font-bold">Creator </td>
                            <td> {{ $game->creator_id}}</td>
                        </tr>
                        <tr>
                            <td class="font-bold">Description </td>
                            <td> {{ $game->description}}</td>
                        </tr>
                        <tr>
                            <td class="font-bold">Category </td>
                            <td >{{ $game->category}}</td>
                        </tr>
                        <tr>
                            <td class="font-bold">Platform </td>
                            <td >{{ $game->platform}}</td>
                        </tr>
                        <tr>
                            <td class="font-bold">Release Date </td>
                            <td >{{ $game->release_date}}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection