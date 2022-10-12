 
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
                <h3>Add Blog  
                   <a class="btn btn-success float-right btn-sm" href="{{route('all.blog')}}"><i class="fa fa-plus-circle"></i>All Blog</a>
                </h3>
              </div>

                <div class="card-body">
       <form action="{{route('store.blog')}}" method="post" role="form" enctype="multipart/form-data">
        @csrf
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label>Title</label>
                      <input type="text" name="title" placeholder="Title" class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                      <label> Date</label>
                      <input type="date" name="date" value="{{date('Y-m-d')}}" class="form-control">
                    </div>


                    <div class="col-md-12">
                      <div class="form-group">
                           <label>Short  Description</label>
                           <textarea id="summernote" class="form-control" name="short"></textarea>

                       </div>
                        </div>

                        <div class="col-md-12">
                          <div class="form-group">
                               <label>Long  Description</label>
                               <textarea id="summernotetwo" class="form-control" name="long"></textarea>

                           </div>
                            </div>

                   
                    

                      <div class="form-group col-md-6">
                        <label>Image</label>
                        <input type="file" name="image"  class="form-control"  onchange="readURL(this);">

                          <span class="custom-file-control"></span>
                <img src="#" id="one" >
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
  

<script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#one')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>


@endsection