@include('templates.navbar')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">first_name</th>
            <th scope="col">last_name</th>
            <th scope="col">email</th>
            <th scope="col">avatar</th>
          </tr>
        </thead>
        @foreach ($UserList as $list)
        <tbody>
            <tr>
              <th scope="row">{{$list['id']}}</th>
              <td>{{$list['first_name']}}</td>
              <td>{{$list['last_name']}}</td>
              <td>{{$list['email']}}</td>
              <td><img src="{{$list['avatar']}}" alt=""></td>
            </tr>
          </tbody>
        @endforeach
      </table>
</div>
@include('templates.footer')
