@extends('layouts.app')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('RetroVibe.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <x-text-input
                        type="text"
                        name="game_title"
                        field="game_title"
                        placeholder="Title"
                        class="form-control"
                        autocomplete="off"
                        :value="@old('game_title')"></x-text-input>

                        @if ($errors->has('game_title'))
                        <p class="error">{{$errors->first('game_title')}}</p>
                    @endif

                    <x-text-input
                    type="text"
                    name="creator"
                    field="creator"
                    placeholder="Creator"
                    class="form-control"
                    autocomplete="off"
                    :value="@old('creator')"></x-text-input>

                    @if ($errors->has('creator'))
                    <p class="error">{{$errors->first('creator')}}</p>
                @endif

                        <textarea
                        name="description"
                        rows="10"
                        field="description"
                        placeholder="Start typing here..."
                        class="w-full mt-5"
                        >{{@old('description')}}</textarea>

                        @if ($errors->has('description'))
                        <p class="error">{{$errors->first('description')}}</p>
                    @endif

                    <input
                    type = "date"
                    name="release_date"
                    field="release_date"
                    class="w-full mt-5"
                    {{@old('release_date')}}>

                    @if ($errors->has('release_date'))
                    <p class="error">{{$errors->first('release_date')}}</p>
                @endif

                        <select name="category" id="category" field="category">
                            <option value="">Select Genre</option>
                            <option value="horror">Horror</option>
                            <option value="act-ad">Action-Adventure</option>
                            <option value="thriller">Thriller</option>
                            <option value="evg">Episodic Video Game</option>
                            <option value="puzzle">Puzzle</option>
                            <option value="rgp">RPG</option>
                        </select>

                        <select name="edition" id="edition" field="edition">
                            <option value="">Select Edition</option>
                            <option value="Collectors">Collectors</option>
                            <option value="Standard">Standard</option>
                            <option value="Deluxe">Deluxe</option>
                        </select>

                        <select name="platform" id="platform" field="platform">
                            <option value="">Select Platform</option>
                            <option value="PS4">PS4</option>
                            <option value="PS5">PS5</option>
                            <option value="PC">PC</option>
                            <option value="Switch">Swich</option>
                            <option value="Xbox">Xbox</option>
                        </select>

                        <input
                        type="file"
                        name="game_image"
                        field="game_image"
                        placeholder="Game Cover"
                        class="w-full mt-6">
                    


                    <button type="submit" class="btn btn-primary mt-6">Save Game</button>
                </form>
            </div>
        </div>
    </div>
@endsection