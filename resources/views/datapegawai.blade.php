<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INPUT WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
      <h1 class = "text-center">Data Test</h1>
      <div class ="container">
      <a href = "/tambahpegawai" class="btn btn-success">Tambah</a>
      <div class = "row">
        @if($message = Session::get('Success'))
        <div class="alert alert-success" role="alert">
          {{ $message }}
        </div>
        @endif
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
                    @foreach($data as $row)
                    <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$row->Name}}</td>
                        <td>{{$row->jenisKelamin}}</td>
                        <td>0{{$row->telephone}}</td>
                        <td>{{$row->created_at->format('D M Y')}}</td>
                        <td>
                            <a href = "/tampildata/{{$row->id}}" class="btn btn-info">Edit</a>
                            <a href = "/deletedata/{{$row->id}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>