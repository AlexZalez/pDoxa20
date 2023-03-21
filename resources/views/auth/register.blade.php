<x-layouts.app name="Register">

    <div class="container d-flex justify-content-center ">
        <form method="POST" class="mb-3 p-2 rounded text-white w-50 bg-dark">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label" >Name</label>
                <input type="text" autofocus="autofocus" name="name" value="{{ old('name') }}" class="form-control" id="name">
                @error('name')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
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
                <label for="password" class="form-label" >Password Confirmation</label>
                <input type="password" name="password_confirmation"  class="form-control" id="password">
                @error('password')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{route('login')}}">Login</a>
                <button class="btn btn-info " type="submit">Submit</button>
            </div>
        </form>
    </div>

</x-layouts.app>