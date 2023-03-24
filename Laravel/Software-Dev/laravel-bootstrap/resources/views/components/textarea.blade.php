<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
    
    @props(['disabled' => false, 'field' => '', 'value' => ''])

    <textarea {{$disabled ? 'disabled' : '' }}
    {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring
    focus:ring-indigo-200 focus:ring-opacity-50']) !!}
        >{{$value}}</textarea>
    @error($field)
        <div class="text-red-600 text-sm">{{ $message }}</div>
    @enderror
    
</div>