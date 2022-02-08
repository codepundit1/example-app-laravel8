

    <h1>Log in</h1>

    {{-- @if ($errors->any())
        @foreach ($errors->all() as $err)
            <li style="background-color: #ff5656;">{{$err}}</li>
        @endforeach
    @endif --}}
        <form action="/form" method="POST">
            @csrf
            <input type="text" name="username" placeholder="enter name"><br><br>
            <span style="color: #ff5656">@error('username'){{$message}} <br><br>

            @enderror</span>
            <input type="password" name="upassword" placeholder="password"><br><br>
            <span style="color: #ff5656">@error('upassword'){{$message}} <br><br>

                @enderror</span>
            <button type="submit">login</button>
        </form>

