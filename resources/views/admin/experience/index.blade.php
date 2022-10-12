  @extends('admin.layout.layout')
  @section ('admin_content')




   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Experience</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Experience</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
                <h3>All Experience  
                   <a class="btn btn-success float-right btn-sm" href="{{route('add.experience')}}"><i class="fa fa-plus-circle"></i>Add Experience</a>
                </h3>
              </div>

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Year</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($experience as $row)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->year}}</td>
                    <td>{{$row->name}}</td>
                    <td>{!!$row->desc!!}</td>

                <td>
                  <a href="{{route('edit.experience',$row->id)}}" class="btn btn-info">Edit</a>
                  <a href="{{route('delete.experience',$row->id)}}" class="btn btn-danger" id="delete">Delete</a>
                </td>
                  </tr>
                  @endforeach
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Year</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
                  </div>  
                </div>
                <!-- /.card-body -->

           
            </div>
    
          </div>
        </div>


    
    </section>




    <!-- Main content -->
    </div>
  



@endsection