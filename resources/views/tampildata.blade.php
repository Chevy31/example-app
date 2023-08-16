<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
      <h1 class = "text-center">Edit Data</h1>
      <div class ="container">
          <div class = "row justify-content-center">
              <div class = "col-8">
                  <div class = "card">
                      <div class = "card-body">
                          <form action="/updatedata/{{ $data->id }}" method="POST" encytpe="multipart/form-data">
                              @csrf
                              <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Name</label>
                                  <input type="text" name = "Name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->Name}}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Gender</label>
                                    <select class="form-select" name = "jenisKelamin" aria-label="Default select example">
                                        <option selected>{{$data->jenisKelamin}}</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Number Telephone</label>
                                    <input type="number" name = "telephone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->telephone}}">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>