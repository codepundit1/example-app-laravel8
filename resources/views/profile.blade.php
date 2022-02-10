@include('templates.navbar')

<div class="container">

        <h1>Profile Page</h1>
    <h2>Wellcome <span style="color: green;">{{session('name')}}</span></h2>



       <a href="/logout" class="btn btn-success">Logout</a>

</div>

@include('templates.footer')
