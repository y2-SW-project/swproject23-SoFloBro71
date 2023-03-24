
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">

{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font">
            {{ __('RetroVibes') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
{{-- 
            <x-alert-success>

                {{session('success')}}

            </x-alert-success>  --}}
            
            <a href="{{ route('RetroVibe.create') }}" class="btn-link btn-lg mb-2">+ New Game</a>
            @forelse ($Retros as $Retro)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg flex">
                    <div>
                        <h2 class="text">
                            <a href="{{ route('RetroVibes.show', $Retro) }}">{{ $Retro->title }}</a>
                            <p>{{ $Retro->developer }}</p>
                            <p>{{ $Retro->description }}</p>
                            <p>{{ $Retro->category }}</p>
                        </h2>
                        <p class="mt-2">
                            {{ Str::limit($Retro->text, 200) }}
                        </p>
                        <span class="block mt-4 text-sm opacity-70">{{ $Retro->updated_at->diffForHumans() }}</span>
                    </div>
                        <img src="{{asset('storage/images/' . $Retro->game_image)}}" width="400" />
                </div>
            @empty
            <p>You have no Games yet.</p>
            @endforelse
            {{$Retro->links()}}
        </div>
    </div>
{{-- </x-app-layout> --}}