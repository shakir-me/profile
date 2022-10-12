  @extends('admin.layout.layout')
  @section ('admin_content')




   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Blog</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Blog</li>
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
                <h3>All Blog  
                   <a class="btn btn-success float-right btn-sm" href="{{route('add.blog')}}"><i class="fa fa-plus-circle"></i>Add Blog</a>
                </h3>
              </div>

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($blog as $row)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->title}}</td>
                    <td>{{$row->date}}</td>
                  <td>
                  <img id="logo" src="{{asset('admin/blog/'.$row->image) }}" width="50" height="50;" alt="image" />
                </td>

                <td>
                  <a href="{{route('edit.blog',$row->id)}}" class="btn btn-info">Edit</a>
                  <a href="{{route('delete.blog',$row->id)}}" class="btn btn-danger" id="delete">Delete</a>
                </td>
                  </tr>
                  @endforeach
                  
                  </tbody>
                  <tfoot>
                  <tr>
                     <th>ID</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Image</th>
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