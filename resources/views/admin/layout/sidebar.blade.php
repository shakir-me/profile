<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    @php
    $setting=DB::table('settings')->first();
    @endphp

    <a href="{{url('dashboard')}}" class="brand-link">
      <img src="{{asset('admin/setting/'.$setting->image) }}" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>
    

    <div class="sidebar">
     <!--  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('dashboard')}}" class="d-block">Name</a>
        </div>
      </div> -->



      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{url('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Dashboard
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>

         
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Setting 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/update/setting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Password</p>
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('website/setting')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Setting Update</p>
                </a>
              </li>
            </ul>
          </li>


           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               About Us 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('about/us')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Us</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('all/project')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project List</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('all/testimonial')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonial List</p>
                </a>
              </li>
            </ul>
          </li>


           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Resume
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('all/service')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Service </p>
                </a>
              </li>
            </ul>

           
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('all/education')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Education List</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('all/experience')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Experience List</p>
                </a>
              </li>
            </ul>
          </li>

           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Work
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('all/category')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category </p>
                </a>
              </li>
            </ul>

           
        
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('all/work')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Work List</p>
                </a>
              </li>
            </ul>
          </li>


           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Blog
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('add/blog')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Blog </p>
                </a>
              </li>
            </ul>

           
        
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('all/blog')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Blog</p>
                </a>
              </li>
            </ul>
          </li>





           





         
      
         
       
           <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Logout
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>