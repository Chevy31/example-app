@extends('layout.admin')
@section('content')
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
                                    <label for="exampleInputEmail1" class="form-label">NIK</label>
                                    <input type="number" name = "nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nik }}">
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Name</label>
                                  <input type="text" name = "nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama }}">
                                </div>
                                <div class="mb-3">
                                <div class="mb-3 row">
                                    <label for = "started_at">Tanggal Lahir</label>
                                    <input type = "date" name = "tl"class="form-control" value="{{ $data->tl }}"></input>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select" name = "jenisKelamin" aria-label="Default select example">
                                        <option selected>{{ $data->jenisKelamin }}</option>
                                        <option value="1">Perempuan</option>
                                        <option value="2">laki-laki</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                  <input type="text" name = "alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->alamat }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Status Perkawinan</label>
                                    <select class="form-select" name = "statusperkawinan" aria-label="Default select example">
                                        <option selected>{{ $data->statusperkawinan }}</option>
                                        <option value="1">Sudah kawin</option>
                                        <option value="2">Belum Kawin</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Pekerjaan</label>
                                  <input type="text" name = "pekerjaan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->pekerjaan }}">
                                </div>
                                <div class="mb-3">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Number Telephone</label>
                                    <input type="number" name = "telephone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->telephone }}">
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
