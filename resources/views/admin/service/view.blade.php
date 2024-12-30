@extends('admin\master')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-6">
              <div class="card shadow-lg">
                  <div class="card-header text-center"> <h1>Service</h1></div>
                  <div class="card-body">
                  
                      <table class="table table-bordered text-center">
                        
                          <tr>
                              <td>
                                  <img src="{{ asset('uploads/services/'.$viewService->Service_Image)}}" style="height: 300px; width:400px" alt="">
                              </td>
                          </tr>
                          <tr>
                              <td> <h3> <b>{{$viewService->Service_Name}}</b> </h3> </td>
                          </tr>
                          <tr>
                            <td> <h5> {{$viewService->Service_Description}} </h5> </td>
                          </tr>
                      </table>
                  </div>
                  <div class="card-footer text-center">
                      <a href="/admin/service/list" class="btn btn-secondary"> <i class="nav-icon fas fa-arrow-left"></i> Back </a>
                  </div>
              </div>
          </div>
      </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    
@endsection

