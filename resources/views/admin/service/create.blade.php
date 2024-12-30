@extends('admin\master')

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> <b>Create new Service </b> </h1>
          </div>
          <div class="col-sm-6">
            <a class="btn btn-success float-right" href="/admin/service/list"> <i class="nav-icon fas fa-eye"></i> &nbsp; Service List</a> &nbsp;
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
              <!-- form start -->
              <form action="/admin/service/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-6">
                        <label for="ServiceName"> Name <span class="text-danger"> * </span> </label> 
                        <input type="text" name="s_name" id="s_name" class="form-control" required>
                      </div>
                      <div class="col-6">
                        <label for="ServiceImage"> Image <span class="text-danger"> * </span> </label>
                        <input type="file" name="s_img" id="s_img" class="form-control" required>
                      </div>
                    </div>
                    <div class="row pt-3">
                      <div class="col-12">
                        <label for="ServiceDescription"> Description <span class="text-danger"> * </span> </label>
                        <textarea name="s_des" id="s_des" class="form-control" required></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-primary"> <i class="nav-icon fas fa-save"> </i> Submit</button>
                  <button type="reset" class="btn btn-danger"> <i class="nav-icon fas fa-times "> </i> Reset</button>
                  <a href="/admin/service/list" class="btn btn-secondary"> <i class="nav-icon fas fa-arrow-left"></i> Back </a>
                </div>
              </form>
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

