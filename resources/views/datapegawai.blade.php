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
    <!-- end content header -->
    <section class="content">
      <div class = "container-fluid">
        <div class ="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
              <div class="info-box-content">
                  <span class="info-box-text">CPU Traffic</span>
                  <span class="info-box-number">
                    10
                    <small>%</small>
                  </span>
               </div>  <!---infobox-->
            </div>  <!---end of info box content-->
          </div>  <!---end of col-->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div> <!-- /.col -->
           <!-- fix for small devices only -->
           <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>   <!---end of row-->
      </div>     <!---end of container fluid-->

    </section>
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