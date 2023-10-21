@extends('layout.user')
@section('content')
<body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
      <h1 class = "text-center">Data KTP</h1>
      <div class ="container">
          <div class = "row justify-content-center">
              <div class = "col-8">
                  <div class = "card">
                      <div class = "card-body">
                          <form action="/insertdata2" method="POST" encytpe="multipart/form-data">
                              @csrf
                              <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">NIK</label>
                                    <input type="number" name = "nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @error('nik')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Name</label>
                                  <input type="text" name = "nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  @error('nama')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="mb-3">
                                <div class="mb-3 row">
                                    <label for = "started_at">Tanggal Lahir</label>
                                    <input type = "date" id ="tl"name = "tl"class="date"></input>
                                    @error('tl')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                                    <select id="jenisKelamin" name="jenisKelamin" class="form-control @error('jenisKelamin') is-invalid @enderror" name="jenisKelamin">
                                        <option selected value="0">Select</option>
                                        <option value="1">Perempuan</option>
                                        <option value="2">laki-laki</option>
                                    </select>
                                    @error('jenisKelamin')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                  <input type="text" name = "alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  @error('alamat')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Status Perkawinan</label>
                                    <select id="statusperkawinan" name="statusperkawinan" class="form-control @error('statusperkawinan') is-invalid @enderror" name="statusperkawinan">
                                        <option selected value="0">Select</option>
                                        <option value="1">Sudah kawin</option>
                                        <option value="2">Belum Kawin</option>
                                    </select>
                                    @error('statusperkawinan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Pekerjaan</label>
                                  <input type="text" name = "pekerjaan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  @error('pekerjaan')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="mb-3">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Number Telephone</label>
                                    <input type="number" name = "telephone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @error('telephone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
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
  @push('scripts')
  <script>
    const fp = flatpickr(".date", {
      dateFormat: "Y-m-d",
    });
</script>
  @endpush
@endsection
