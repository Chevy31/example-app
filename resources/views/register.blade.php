@extends('layout.admin')
@section('content')
<body>
      <h1 class = "text-center">Tambah User</h1>
      <div class ="container">
          <div class = "row justify-content-center">
              <div class = "col-8">
                  <div class = "card">
                      <div class = "card-body">
                          <form action="/registerUser" method="POST"">
                              @csrf
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="name">
                                <div class="input-group-append">
                                </div>
                              </div>
                              <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Email</label>
                                  <input type="text" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Password</label>
                                  <input type="text" name = "password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
@endsection
