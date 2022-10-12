 
  @extends('admin.layout.layout')
  @section ('admin_content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage About</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage About</li>
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
       <form action="{{route('update.about',$about->id)}}"  method="post" class="forms-sample"  enctype="multipart/form-data">
                    @csrf
                  <div class="form-row">

                    <div class="form-group col-md-6">
                      <label>Title</label>
                      <input type="text"   class="form-control" name="title" @if(!empty($about->title)) value="{{$about->title}}" @else value="{{old('title')}}" @endif>
                    </div>



                 <div class="form-group col-md-6">
                       <label for="image">About Image</label>
                       <input type="file"  name="image" id="image"  class="form-control" onchange="readURL(this);" @if(!empty($about->image)) value="{{$about->image}}" @else value="{{old('image')}}" @endif >
                       <img src="#" id="one" >
                         <img id="logo" src="{{asset('admin/about/'.$about->image) }}" width="50" height="50;" />
                     </div>


                     <div class="form-group col-md-6">
                       <label>Email</label>
                       <input type="text"   class="form-control" name="email" @if(!empty($about->email)) value="{{$about->email}}" @else value="{{old('email')}}" @endif>
                     </div>

                     <div class="form-group col-md-6">
                       <label>Phone</label>
                       <input type="text"   class="form-control" name="phone" @if(!empty($about->phone)) value="{{$about->phone}}" @else value="{{old('phone')}}" @endif>
                     </div>

                     <div class="form-group col-md-6">
                       <label>Current City</label>
                       <input type="text"   class="form-control" name="current_city" @if(!empty($about->current_city)) value="{{$about->current_city}}" @else value="{{old('current_city')}}" @endif>
                     </div>

                     <div class="form-group col-md-6">
                       <label>Age </label>
                       <input type="text"   class="form-control" name="age" @if(!empty($about->age)) value="{{$about->age}}" @else value="{{old('age')}}" @endif>
                     </div>

                     <div class="form-group col-md-6">
                       <label>Degree </label>
                       <input type="text"   class="form-control" name="degree" @if(!empty($about->degree)) value="{{$about->degree}}" @else value="{{old('degree')}}" @endif>
                     </div>

                     <div class="form-group col-md-6">
                       <label>Freelance </label>
                       <input type="text"   class="form-control" name="freelance" @if(!empty($about->freelance)) value="{{$about->freelance}}" @else value="{{old('freelance')}}" @endif>
                     </div>
                     
                     
                     
                                 

                    <div class="col-md-12">
                  <div class="form-group">
                   <label>Short  Description </label>
                  <textarea id="summernote" class="form-control" name="short_desc">
                    {!!$about->short_desc!!}
                  </textarea>

                 </div>
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