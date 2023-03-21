<x-layouts.app
    name="hola"
>
    <div class="card rounded">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <div class="card-text">{{$post->body}}</div>
        </div>
    </div>

</x-layouts.app>