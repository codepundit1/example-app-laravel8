@include('templates.navbar')

<div class="section mt-5">
    <h1 class="text-center">Update</h1>

    <form action="/edit" method="POST" style="max-width: 600px; margin: 0 auto;">
        @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <input type="text" name="username" class="form-control mb-3" value="{{$data['username']}}">
        <input type="email" name="email" class="form-control mb-3" value="{{$data['email']}}">
        <input type="text" name="password" class="form-control mb-3" value="{{$data['password']}}">

        <button class="btn btn-success" type="submit">Update</button>
    </form>
</div>

@include('templates.footer')

