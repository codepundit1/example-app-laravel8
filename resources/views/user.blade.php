@include('templates.navbar')



<div class="container">
    <form action="users" method="POST">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control" id="name" aria-describedby="name" placeholder="Enter name">
            <span style="color: #ff5656">@error('name'){{$message}}

            @enderror</span>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
          <span style="color: #ff5656">@error('password'){{$message}}

            @enderror</span>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>



@include('templates.footer')
