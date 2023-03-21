<x-layouts.app name="Login">

    <div class="container d-flex justify-content-center ">
        <form method="POST" action="{{route('login')}}" class="mb-3 p-2 rounded text-white w-50 bg-dark">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label" >Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email">
                @error('email')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label" >Password</label>
                <input type="password" name="password"  class="form-control" id="password">
                @error('password')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="checkbox" name="recuerdame" id="">
                <label for="Recuerdame" class="form-label" >Recuerdame</label>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{route('register')}}">Register</a>
                <button class="btn btn-info " type="submit">Log in</button>
            </div>
            
        </form>
    </div>

</x-layouts.app>