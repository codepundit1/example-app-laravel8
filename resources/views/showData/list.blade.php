


@include('templates.navbar')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
          </tr>
        </thead>
        @foreach ($teacher_list as $list)
        <tbody>
            <tr>
              <th scope="row">{{$list['id']}}</th>
              <td>{{$list['title']}}</td>
              <td>{{$list['body']}}</td>

            </tr>
          </tbody>
        @endforeach
      </table>
</div>
@include('templates.footer')
