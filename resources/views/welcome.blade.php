<!DOCTYPE html>
<x-layouts.app name="Inicio">
    
    
    <div class="mx-auto px-4 rounded-lg w-full h-64 drop-shadow-2xl">
        
        {{$users->areas}}<br><br>

        {{-- {{$users->areas->adresses}} Da error --}}

        @foreach ($areas->adresses as $adress)
            {{$adress}}<br><br>
        @endforeach
        
    </div>

</x-layouts.app>