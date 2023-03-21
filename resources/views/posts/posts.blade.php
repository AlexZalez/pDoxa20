<x-layouts.app name="Posts">

    @auth
        <div class="d-flex justify-content-start">
            <a class="btn btn-info text bg-gradient p-2" href="/posts/create">Create your Post!</a>
        </div>
    @endauth

    <div class="row">
        @foreach ($posts as $post)
        <div class="col-auto mt-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <a class="col-auto" href="posts/{{$post->id}}"><h5 class="card-title">{{$post->title}}</h5></a>

                    <p class="text-truncate">{{$post->body}}</p>
                    
                    @auth
                        <div class="d-flex justify-content-between">
                            <form  class="col-auto" action="{{route('post.destroy', $post)}}" method="post">
                                @csrf @method('DELETE')
                                <input type="submit" value="Delete">
                            </form>
                            <a href="{{route('post.edit', $post)}}" class="card-link">Edit</a>
                        </div>
                    @endauth
                </div>
              </div>
        </div>
        @endforeach
    </div>

    
</x-layouts.app>