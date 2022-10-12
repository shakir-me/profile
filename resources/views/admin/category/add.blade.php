 
  @extends('admin.layout.layout')
  @section ('admin_content')



   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Category</li>
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
                <h3>Add Category  
                   <a class="btn btn-success float-right btn-sm" href="{{route('all.category')}}"><i class="fa fa-plus-circle"></i>All Category</a>
                </h3>
              </div>

                <div class="card-body">
       <form action="{{route('store.category')}}" method="post" role="form" enctype="multipart/form-data">
        @csrf
                  <div class="form-row">
                
                    <div class="form-group col-md-6">
                      <label>Name</label>
                      <input type="text" name="name" placeholder=" Name" class="form-control">
                    </div>

                          

                   
              
                   
                    

                     
                 
</div>
                    <div class="form-group col-md-6">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
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