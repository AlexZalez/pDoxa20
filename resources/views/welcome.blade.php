<!DOCTYPE html>
<x-layouts.app name="Inicio">
    
    
    <div class="mx-auto rounded-lg w-full h-64 drop-shadow-2xl">
        @foreach ($users as $user)
            <div class="font-extrabold text-lg">
                {{$user->name}}
            </div>
            @foreach ($user->areas as $areas)
                <div class="mx-4">
                    {{$areas->name}}
                </div>
            @endforeach
        @endforeach
        
    </div>

</x-layouts.app>