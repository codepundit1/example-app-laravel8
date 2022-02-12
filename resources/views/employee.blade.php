@include('templates.navbar')

<div class="section mt-5">
    <h1 class="text-center">Add Employee <span><a href="/employeeData" class="btn btn-success">Show database</a></span></h1>

    <form action="employees" method="POST" style="max-width: 600px; margin: 0 auto;">
        @csrf
        <input type="text" name="username" class="form-control mb-3" placeholder="username">
        <input type="email" name="email" class="form-control mb-3" placeholder="email">
        <input type="text" name="password" class="form-control mb-3" placeholder="password">

        <button class="btn btn-success" type="submit">Add</button>
    </form>
</div>

@include('templates.footer')
