
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Game') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('RetroVibe.update', $Retro) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <x-text-input
                    type="text"
                    name="game_title"
                    field="game_title"
                    placeholder="Title"
                    class="w-full"
                    autocomplete="off"
                    {{-- :value="@old('title')" --}}
                    value="{{ old('game_title', $Retro->game_title) }}"></x-text-input>

                    @if ($errors->has('game_title'))
                        <p class="error">{{$errors->first('game_title')}}</p>
                    @endif

                    <x-text-input
                    type="text"
                    name="creator"
                    field="creator"
                    placeholder="Creator"
                    class="w-full"
                    autocomplete="off"
                    {{-- :value="@old('title')" --}}
                    value="{{ old('creator', $Retro->creator) }}"></x-text-input>

                    @if ($errors->has('creator'))
                        <p class="error">{{$errors->first('creator')}}</p>
                    @endif

                    <textarea
                    name="description"
                    rows="10"
                    field="description"
                    placeholder="Start typing here..."
                    class="w-full mt-6"
                    >{{@old('description', $Retro->description)}}</textarea>

                    @if ($errors->has('description'))
                    <p class="error">{{$errors->first('description')}}</p>
                @endif

                    <select name="category" id="category" field="category">
                        {{-- <option value="test">test</option> --}}
                        <option value="">{{($Retro->category === '') ? 'Select Category' : ''}}</option>
                        <option value="horror" {{($Retro->category === 'horror') ? 'Selected' : ''}}>Horror</option>
                        <option value="act-ad" {{($Retro->category === 'act-ad') ? 'Selected' : ''}}>Action-Adventure</option>
                        <option value="thriller" {{($Retro->category === 'thriller') ? 'Selected' : ''}}>Thriller</option>
                        <option value="evg" {{($Retro->category === 'evg') ? 'Selected' : ''}}>Episodic Video Game</option>
                        <option value="puzzle" {{($Retro->category === 'puzzle') ? 'Selected' : ''}}>Puzzle</option>
                        <option value="rgp" {{($Retro->category === 'rpg') ? 'Selected' : ''}}>RPG</option>
                        </select>

                        @if ($errors->has('category'))
                        <p class="error">{{$errors->first('category')}}</p>
                    @endif

                    <select name="platform" id="platform" field="platform">
                        {{-- <option value="test">test</option> --}}
                        <option value="">{{($Retro->platform === '') ? 'Select Platform' : ''}}</option>
                        <option value="PS4" {{($Retro->platform === 'PS4') ? 'Selected' : ''}}>PS4</option>
                        <option value="PS5" {{($Retro->platform === 'PS5') ? 'Selected' : ''}}>PS5</option>
                        <option value="PC" {{($Retro->platform === 'PC') ? 'Selected' : ''}}>PC</option>
                        <option value="Switch" {{($Retro->platform === 'Switch') ? 'Selected' : ''}}>Switch</option>
                        <option value="Xbox" {{($Retro->platform === 'Xbox') ? 'Selected' : ''}}>Xbox</option>
                        <option value="rgp" {{($Retro->platform === 'rpg') ? 'Selected' : ''}}>RPG</option>
                        </select>

                        @if ($errors->has('platform'))
                        <p class="error">{{$errors->first('platform')}}</p>
                    @endif

                    <input
                    type="file"
                    name="game_image"
                    field="game_image"
                    placeholder="Game Cover"
                    class="w-full mt-6">
                    
                    

                    <x-primary-button class="mt-6">Save Game</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>