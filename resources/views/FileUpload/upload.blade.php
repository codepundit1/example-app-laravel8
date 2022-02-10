@include('templates.navbar')



<div class="container">


    <h1>Upload File</h1>
    <form action="upload" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">File Uplaod</label>
         <input type="file" name="file"> <br>
         <span class="text-danger">@error('file'){{$message}}

         @enderror</span>
        </div>

        <button type="submit" class="btn btn-primary">Upload</button>
      </form>
</div>

@include('templates.footer')
