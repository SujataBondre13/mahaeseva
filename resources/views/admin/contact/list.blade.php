@extends('admin\master')

@section('content')

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> <b> Contact List </b> </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin-1">Home</a></li>
            <li class="breadcrumb-item active">Contact</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

    <!-- Main content -->
    <section class="content pt-2">
        <div class="container-fluid">
            <div class="row">
                <section class="col-lg-12">
                    <div class="card">
                        
                            @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif


                        <div class="card-body ">
                            <div class="card-body text-center table-responsive p-0" style="height: auto;">
                                <table class="table table-head-fixed table-striped table-hover ">
                                    <thead>
                                        <tr>
                                            <th style="width: 10%">#</th>
                                            <th> Name</th>
                                            <th> Email </th>
                                            <th>Mobile Number</th>
                                            <th>Project</th>
                                            <th> Subject </th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contactData as $data)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td>{{$data->Name}}</td>
                                            <td>{{$data->Email}}</td>
                                            <td>{{$data->Mobile_Number}}</td>
                                            <td>{{$data->Project}}</td>
                                            <td>{{$data->Subject}}</td>
                                            <td>{{$data->Message}}</td>
                                            <td>
                                                <a href="/admin/contact/delete/{{$data->id}}" class="btn btn-danger"><i class="nav-icon fas fa-trash"></i> </a>                                            
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
    </section>
</div>
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

@endsection
