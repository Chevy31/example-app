@extends('layout.admin')
@push('css')
      <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@section('content')
<div class="content-wrapper" >
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">GTW WEB APA </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ga tau</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <div class="container m-auto ">
    <a href = "/tambahpegawai" class="btn btn-success">Tambah</a>
    <div class="row g-6 align-items-center mt-3">
      <div class = "col-auto">
        <form action ="/pegawai" method = "GET">
          <input type="search" class="form-control" id="exampleInputPassword1"name ="search"class="form-control" aria-describedby="passwordHelpInline">
        </form>
      </div>
      <div class = "col-auto">
        <a href = "/eksportpdf" class="btn btn-info">Export PDF</a>
      </div>
      <div class = "col-auto">
        <a href = "/eksportexcel" class="btn btn-primary">Export Excel</a>
      </div>
      <div class = "row m-5">
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
</div>
  
@endsection