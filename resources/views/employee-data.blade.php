@include('templates.navbar')

<div class="section mt-5" style="max-width: 600px; margin: 0 auto;">
    <h1 class="text-center">employee database <span><a href="/employee" class="btn btn-success">Add more</a></span></h1>

    <table class="table table-striped table-hover">
        <thead>
          <tr>

            <th scope="col">UserName</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($employee_list as $list)
        <tbody>
            <tr>

              <td>{{$list['username']}}</td>
              <td>{{$list['email']}}</td>
              <td>

                  <a href="{{"edit/".$list['id']}}" class="btn btn-secondary btn-sm"> Edit</a>
                  <a href="{{"delete/".$list['id']}}" class="btn btn-danger btn-sm">Delete</a>
              </td>

            </tr>
          </tbody>
        @endforeach
      </table>
</div>

@include('templates.footer')
