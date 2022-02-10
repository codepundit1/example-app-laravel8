@include('templates.navbar')



<div class="container">

    @if (session('user'))
   <div class="text-success">
    <span >{{session('user')}} has been Added Successfully</span>
   </div>

    @endif
    <h1>Add Member</h1>
    <form action="memberlist" method="POST">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="user" class="form-control" id="name" aria-describedby="name" placeholder="Enter name">
        </div>

        <div class="form-group">
            <label for="email">email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="email">
          </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

@include('templates.footer')
