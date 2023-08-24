<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INPUT WEB</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="container m-5 ">
      <h1 class = "text-center">Data Test</h1>
      <div class ="container">
      <a href = "/tambahpegawai" class="btn btn-success">Tambah</a>

      <div class="row gap-3 align-items-center mt-2">
        <div class = "col-auto">
          <form action ="/pegawai" method = "GET">
            <input type="search" class="form-control" id="exampleInputPassword1"name ="search"class="form-control" aria-describedby="passwordHelpInline">
          </form>
        </div>
        <div class = "col-auto">
        <a href = "/eksportpdf" class="btn btn-info">Export PDF</a>
      </div>
      <div class = "row">
        <!-- @if($message = Session::get('Success'))
        <div class="alert alert-success" role="alert">
          {{ $message }}
        </div>
        @endif -->
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">No</th>
                      <th scope="col">Name</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Number Telephone</th>
                      <th scope="col">Date</th>
                      <th scope="col">Action</th>
                    </tr>
                </thead>
                @php
                    $no = 1;
                @endphp
                <tbody>
                    @foreach($data as $index => $row)
                    <tr>
                        <th scope="row">{{$index + $data ->firstItem()}}</th>
                        <td>{{$row->Name}}</td>
                        <td>{{$row->jenisKelamin}}</td>
                        <td>0{{$row->telephone}}</td>
                        <td>{{$row->created_at->format('d/m/Y')}}</td>
                        <td>
                            <a href = "/tampildata/{{$row->id}}" class="btn btn-info">Edit</a>
                            <a href = "#" class="btn btn-danger delete" data-id="{{$row->id}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links('vendor.pagination.bootstrap-5') }}
          </div>
</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
  <script>
    $('.delete').click(function() {
              var pid = $(this).attr('data-id');
              swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
              }).then((willDelete) => {
                if (willDelete) {
                  window.location = "/deletedata/"+pid+""
                  swal("Your file has been deleted!", {
                    icon: "success",
                  });
                } else {
                  swal("Your file is safe!");
                }
              });
    });
                
  </script>
  
  <script>
  @if (Session:: has('success'))
  toastr.success("{{ Session::get('success') }}")
  @endif
  </script>
</html>