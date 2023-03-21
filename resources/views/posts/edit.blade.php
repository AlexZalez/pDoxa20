<x-layouts.app name="Editar">
    <form action="{{route('post.update', $post)}}" method="post">
        @csrf @method('PATCH')
        <x-layouts.formPost :$post/>        
    <button type="submit" class="btn btn-primary">Editar</button>
    </form>
</x-layouts.app>