@extends('admin\master')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 ">
          <div class="col-sm-6">
            <h1> <b>Service Management</b> </h1>
          </div>
          <div class="col-sm-6">
            <a class="btn btn-success  float-right" href="/admin/service/create">
              &nbsp;  <i class="nav-icon fas fa-plus "></i> &nbsp;Add Service &nbsp;</a>
            {{-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Service Form</li>
            </ol> --}}
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              @if (session('success'))
              <div class = "d-flex justify-content-between alert alert-success" role="alert">  
                {{session('success')}}
                  <button type = "button" class = "close" data-dismiss = "alert" id = "close"> <span> &times;</span>  </button>  
              </div>  
              @endif
              {{-- <div class="card-header">
                <h3 class="card-title">Service Management</h3>
              </div> --}}
              <div class="card-body">
              
                <!-- Table start -->
              <table class="table table-striped">
                 <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                 </thead>
                 <tbody>
                  @foreach ($serviceData as $data)
                    <tr>
                      <td> {{ $loop->iteration }} </td>
                      <td> {{ $data->Service_Name }} </td>
                      <td><img src="{{asset('uploads/services/'.$data->Service_Image)}}" alt="" style="width: 100px; height:100px"></td>
                      <td> {{ $data->Service_Description }} </td>
                      <td>
                        <a href="/admin/service/view/{{ $data->id }}" class="btn btn-primary"> <i class="nav-icon fas fa-eye"></i></a>
                        <a href="/admin/service/edit/{{ $data->id }}" class="btn btn-secondary"> <i class="nav-icon fas fa-edit"></i> </a>
                        <a href="/admin/service/delete/{{ $data->id }}" class="btn btn-danger"><i class="nav-icon fas fa-trash"></i> </a>                                            
                    </td>
                    </tr> 
                  @endforeach 
                 </tbody>
                </table>
                </div>
                <!-- /.card-body -->

                
            </div>
            <!-- /.card -->



          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    
@endsection

