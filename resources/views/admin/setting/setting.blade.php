 
  @extends('admin.layout.layout')
  @section ('admin_content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Setting</li>
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
               
              </div>
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

                <div class="card-body">
       <form action="{{route('update.website.setting',$setting->id)}}"  method="post" class="forms-sample"  enctype="multipart/form-data">
                    @csrf
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label>Name</label>
                      <input type="text"   class="form-control" name="name"  value="{{$setting->name}}">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Title</label>
                      <input type="text"   class="form-control" name="title"  value="{{$setting->title}}">
                    </div>

                     <div class="form-group col-md-6">
                       <label>Email</label>
                       <input type="text"   class="form-control" name="email" value="{{$setting->email}}">
                     </div>

                     <div class="form-group col-md-6">
                       <label>Address</label>
                       <input type="text"   class="form-control" name="address" value="{{$setting->address}}">

                     </div>
                     <div class="form-group col-md-6">
                       <label>Number</label>
                       <input type="text"   class="form-control" name="phone" value="{{$setting->phone}}">
                     </div>

                     <div class="form-group col-md-6">
                       <label>WhatApps Number</label>
                       <input type="text"   class="form-control" name="whatsapp" value="{{$setting->whatsapp}}">
                     </div>

                     <div class="form-group col-md-6">
                       <label>Instragam Link</label>
                       <input type="text"   class="form-control" name="ins" value="{{$setting->ins}}">
                     </div>

                     <div class="form-group col-md-6">
                       <label>Twitter Link</label>
                       <input type="text"   class="form-control" name="twitter" value="{{$setting->twitter}}">
                     </div>

                     <div class="form-group col-md-6">
                       <label>Facebook Link</label>
                       <input type="text"   class="form-control" name="facebook" value="{{$setting->facebook}}">
                     </div>

                   

                     

                
                 

                 <div class="form-group col-md-6">
                       <label for="image"> Image</label>
                       <input type="file"  name="image" id="image"  class="form-control" onchange="readURL(this);" >
                       <img src="#" id="one" >
                         <img id="logo" src="{{asset('admin/setting/'.$setting->image) }}" width="50" height="50;" />
                     </div>


                     <div class="form-group col-md-6">
                           <label for="fvicon"> Fvicon Icon</label>
                           <input type="file"  name="fvicon" id="fvicon"  class="form-control" >
                           <img src="#" id="one" >
                             <img id="logo" src="{{asset('admin/setting/'.$setting->fvicon) }}" width="50" height="50;" />
                         </div>

                         <div class="form-group col-md-6">
                               <label for="file"> Cv</label>
                               <input type="file"  name="file" id="fvicon"  class="form-control" onchange="readURL(this);" >
                               <img src="#" id="one" >
                               
                                  <a href="{{url('admin/file/'.$setting->file)}}" target="_blank">Pdf View</a>
                             </div>

                    

                 

                  


                     </div>

                    <div class="form-group col-md-6">
                      <button type="submit" class="btn btn-primary">Updated</button>
                    </div>
                  </div>
                </form>
                  </div>  
                </div>


           
            </div>
    
          </div>
        </div>


    </section>
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