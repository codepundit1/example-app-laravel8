


@include('templates.navbar')
<div class="container">
    <table class="table table-striped table-hover">
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
      <span>
        {{$teacher_list -> links()}}
    </span>
</div>

<style>
    .w-5{
        display: none;
    }
</style>

@include('templates.footer')
