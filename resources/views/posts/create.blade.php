<x-layouts.app name='Crear'>

    <form action="{{route('post.create')}}" method="post">
        @csrf
        <x-layouts.formPost :$post/>    
    <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</x-layouts.app>