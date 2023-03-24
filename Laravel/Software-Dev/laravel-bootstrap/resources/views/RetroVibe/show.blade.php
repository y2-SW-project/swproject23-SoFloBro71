
<x-app-layout>
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
                <p class="opacity-70">
                    <strong>Created: </strong> {{ $Retro->created_at->diffForHumans() }}
                </p>
                <p class="opacity-70 ml-8">
                    <strong>Updated at: </strong> {{ $Retro->updated_at->diffForHumans() }}
                </p>
                <a href="{{ route('games.edit', $Retro) }}" class="btn-link ml-auto">Edit Game</a>
                <form action="{{ route('games.destroy', $Retro) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you wish to delete this Game?')">Delete Game</button>
            </div>
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td rowspan="6">
                                <img src="{{asset('storage/images/' . $Retro->game_image)}}" width="150"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-bold">Title </td>
                            <td> {{ $Retro->title}}</td>
                        </tr>
                        <tr>
                            <td class="font-bold">Developer </td>
                            <td> {{ $Retro->developer}}</td>
                        </tr>
                        <tr>
                            <td class="font-bold">Description </td>
                            <td> {{ $Retro->description}}</td>
                        </tr>
                        <tr>
                            <td class="font-bold">Category </td>
                            <td >{{ $Retro->category}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>