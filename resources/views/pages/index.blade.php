<!DOCTYPE html>
<html lang="en" class="max-width-d">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>Masum Billah - Entrepreneur | Graphics Designer and Web Developer | Digital Marketer in Bangladesh</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="Retrina Group" />
  <!--  FavIcon  -->
  <link rel="shortcut icon" href="{{asset('admin/setting/'.$setting->fvicon) }}" type="image/x-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
  <!-- Bootstrap Css -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap-icons.css')}}">
  <!-- Malihu Jquery Custom ScrollBar Css -->
  <link rel="stylesheet" href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}">
  <!-- Animate Css -->
  <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
  <!-- Swiper Css -->
  <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
  <!-- Magnific Popup Css -->
  <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
  <!--  Custom Style Css  -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <!--  Color Css  -->
  <link rel="stylesheet" href="{{asset('assets/colors/colorfull.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
</head>

<body class="max-width-d">

  <!-- Preloader -->
  <div id="line-loader">
    <div class="middle-line"></div>
  </div>

  <!--   Menu Overlay Mobile -->
  <div class="menu-overlay d-none"></div>

  <!--   Right Side Start  -->
  <div class="right-side d-none d-lg-block">
    <div id="date"></div>
    <div class="social-box">
      <div class="follow-label">
        <span>Follow Me</span>
      </div>
      <div class="social d-none d-lg-block">
        <a href="{{$setting->whatsapp}}" target="_blank">
          <i class="bi bi-whatsapp t-green"></i>
        </a>
        <a href="{{$setting->ins}}" target="_blank">
          <i class="bi bi-instagram t-purple"></i>
        </a>
        <a href="{{$setting->facebook}}" target="_blank">
          <i class="bi bi-facebook t-blue"></i>
        </a>
      </div>
    </div>
    <div class="next-prev-page">
      <button type="button" class="prev-page bg-base-color hstack">
        <i class="bi bi-chevron-compact-up mx-auto"></i>
      </button>
      <button type="button" class="next-page bg-base-color mt-3 hstack">
        <i class="bi bi-chevron-compact-down mx-auto"></i>
      </button>
    </div>
  </div>
  <!--  Right Side End  -->

  <!--  Left Side Start  -->
  <div class="left-side  nav-close">
    <div class="menu-content-align">
      <div class="left-side-image">
        <img class="left-img" src="{{asset('assets/img/Masum-Billah.png')}}" alt="Masum Billah">
      </div>
      <h1 class="mt-1 name">{{$setting->name}}</h1>
      <a class="download-cv primary-button d-none d-lg-inline-block" href="{{url('admin/file/'.$setting->file)}}" target="_blank">Download CV</a>
      <div class="container d-lg-none d-inline-block">
        <div class="row">
          <div class="col-12 text-center">
            <p class="text-muted mb-0">Web Designer</p>
          </div>
        </div>
      </div>
    </div>
    <div class="menu-align">
      <ul class="list-group menu text-center " id="menu">
        <li class="list-group-item">
          <a href="#hero">
            <i class="bi bi-house"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="list-group-item">
          <a href="#about" class="custom-btn">
            <i class="bi bi-person"></i>
            <span>About</span>
          </a>
        </li>
        <li class="list-group-item">
          <a href="#resume">
            <i class="bi bi-clipboard-check"></i>
            <span>Resume</span>
          </a>
        </li>
        <li class="list-group-item">
          <a href="#portfolio">
            <i class="bi bi-collection"></i>
            <span>Works</span>
          </a>
        </li>
        <li class="list-group-item">
          <a href="#blog">
            <i class="bi bi-book"></i>
            <span>Blog</span>
          </a>
        </li>
        <li class="list-group-item">
          <a href="#contact">
            <i class="bi bi-geo-alt"></i>
            <span>Contact</span>
          </a>
        </li>
      </ul>
      <div class="menu-footer">
        <a class="download-cv primary-button mt-3 mb-4 d-lg-none" href="{{url('admin/file/'.$setting->file)}}" target="_blank">Download CV</a>
        <div class="social d-lg-none d-block">
          <a href="javascript:void(0);" class="d-inline-block">
            <i class="bi bi-whatsapp t-green"></i>
          </a>
          <a href="javascript:void(0);" class="d-inline-block mx-4">
            <i class="bi bi-instagram t-purple"></i>
          </a>
          <a href="javascript:void(0);" class="d-inline-block">
            <i class="bi bi-dribbble t-red"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--  Left Side End  -->

  <!--  Main Start  -->
  <main id="main" class="main-2">

    <!--  Hero Start  -->
    <section id="hero" class="section hero w-100">
      <img class="extend-icon" src="{{asset('admin/setting/'.$setting->image) }}" alt="Masum Billah">
      <div class="hero-center">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center text-lg-start">
              <div class="hero-image d-inline-block d-lg-none">
                <img src="https://via.placeholder.com/250x250" alt="/">
              </div>
              <div class="hero-content mt-4 mx-auto mx-lg-0 text-lg-left mt-lg-none">
                <p class="base-color">𝗘𝗻𝘁𝗿𝗲𝗽𝗿𝗲𝗻𝗲𝘂𝗿</p>
                <h2>Hello , I’m <span class="base-color">{{ $setting->name }} </span>{{$setting->title}}. </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hero-footer d-block d-lg-none">
        <a class="download-cv primary-button mt-3 mb-4 d-lg-none" href="javascript:void(0);">Download CV</a>
        <div class="social d-lg-none mb-4 d-block">
          <a href="javascript:void(0);" class="d-inline-block">
            <i class="bi bi-whatsapp t-green"></i>
          </a>
          <a href="javascript:void(0);" class="d-inline-block mx-4">
            <i class="bi bi-instagram t-purple"></i>
          </a>
          <a href="javascript:void(0);" class="d-inline-block">
            <i class="bi bi-dribbble t-red"></i>
          </a>
        </div>
      </div>
    </section>
    <!--  Hero End  -->

    <!--  About Start  -->
    <section id="about" class="section about">
      <div class="container">
        <!-- Introducce Me -->
        <div class="about-boxes">
          <div class="row">
            <div class="col-lg-5">
              <div class="about-img">
                <img src="{{asset('admin/about/'.$about->image) }}" alt="about">
                <div class="border-img"></div>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="about-description">
                <h3 class="mb-3">{{$about->title}}.</h3>
                <p class="about-text">  {!!$about->short_desc!!} .</p>
              </div>
              <!-- Personal Info -->
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled personal-info">
                    <li>Gmail : <small>{{$about->email}}</small>
                    </li>
                    <li>Phone : <small>{{$about->phone}}</small>
                    </li>
                    <li>Current City : <small> {{$about->current_city}}</small>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled personal-info">
                    <li>Age : <small>{{$about->age}}</small>
                    </li>
                    <li>Degree : <small>{{$about->degree}}
                      </small>
                    </li>
                    <li>Freelance : <small>{{$about->freelance}}</small>
                    </li>
                  </ul>
                </div>
                <div class="col-12">
                  <a href="#contact" class="to-contact primary-button mt-2">Hire me</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--  Count up  -->
        <div id="count-up" class="count-up text-center box-border">
          <div class="row">
            <!-- Item-01 -->
            @foreach ($project as $row )
              
          
            <div class="col-6 col-lg-3 my-4 count-item">
              <div class="count-icon">
                <img src="{{asset('admin/project/'.$row->image) }}" alt="Project">
              </div>
              <span class="timer count-number" data-from="0" data-to="286" data-speed="5000">{{$row->count}}</span>
              <p class="mb-0">{{$row->name}}</p>
            </div>
           @endforeach
          
     
            
          </div>
        </div>
        <!--  Skills  -->
        <div class="skills">
          <div class="row pt-5">
            <div class="col-lg-7">
              <div class="skill-description">
                <h3 class="mb-3">I have been able to experience & developing this type of skill.</h3>
                <p class="mb-0">I was doing everything in my power to provide me with all the experiences to provide
                  cost-effective and high quality products to satisfy my customers all over the world</p>
              </div>
            </div>
            <div class="col-lg-5">
              <ul class="knowledge-item">
                <li>Graphics and animations</li>
                <li>Video Formality</li>
                <li>Short Animationsg</li>
                <li>Teaching Web Design</li>
              </ul>
            </div>
          </div>
        </div>
        <!--  Skillbar  -->
        <div class="row mt-5 skills">
          <div class="col-lg-6">
            <h3 class="subtitle">Design Skills</h3>
            <div id="skills">
              <!-- Item 01 -->
              <div class="col-lg-12 skill-box">
                <div class="skill-text">
                  <div class="skillbar-title">Logo Design</div>
                  <div class="skill-bar-percent"><span data-from="0" data-to="100" data-speed="4000">100</span>%</div>
                </div>
                <div class="skillbar clearfix" data-percent="100%">
                  <div class="skillbar-bar"></div>
                </div>
              </div>
              <!-- Item 02 -->
              <div class="col-lg-12 skill-box">
                <div class="skill-text">
                  <div class="skillbar-title">Web Design</div>
                  <div class="skill-bar-percent"><span data-from="0" data-to="95" data-speed="4000">95</span>%</div>
                </div>
                <div class="skillbar clearfix" data-percent="95%">
                  <div class="skillbar-bar"></div>
                </div>
              </div>
              <!-- Item 03 -->
              <div class="col-lg-12 skill-box">
                <div class="skill-text">
                  <div class="skillbar-title">Illustration</div>
                  <div class="skill-bar-percent"><span data-from="0" data-to="85" data-speed="4000">85</span>%</div>
                </div>
                <div class="skillbar clearfix" data-percent="85%">
                  <div class="skillbar-bar"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 ms-auto mt-5 mt-lg-0">
            <h3 class="subtitle">Language</h3>
            <div class="language-bar">
              <!-- Item 01 -->
              <div class="language-skill">
                <h6 class="mb-0">Bengali <span> (Native)</span>
                </h6>
                <ul class="list-inline text-right">
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                </ul>
              </div>
              <!-- Item 02 -->
              <div class="language-skill">
                <h6 class="mb-0">English <span>Fluent</span>
                </h6>
                <ul class="list-inline text-right">
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle"></i>
                  </li>
                </ul>
              </div>
              <!-- Item 03 -->
              <div class="language-skill">
                <h6 class="mb-0">Hindi & Urdu <span>Basic</span>
                </h6>
                <ul class="list-inline text-right">
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle-fill"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle"></i>
                  </li>
                  <li class="list-inline-item">
                    <i class="bi bi-circle"></i>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--  Client  -->
        <div class="testimonial mt-5">
          <div class="owl-carousel">
            <!-- Item 01 -->
            @foreach ($testimonial as $row)
                
          
            <div class="testimonial-box">
              <p class="testimonial-comment">{!!$row->desc!!}!"</p>
              <div class="testimonial-item">
                <div class="testimonial-image">
                  <img src="{{asset('admin/testimonial/'.$row->image) }}" alt="/">
                </div>
                <div class="testimonial-info">
                  <p class="mb-0">{{$row->name}}</p>
                  <small class="testimonial-jub">{{$row->designation}}</small>
                </div>
              </div>
            </div>
            <!-- Item 02 -->
            @endforeach
       
          
          </div>
        </div>
      </div>
    </section>
    <!--  About End  -->

    <!--  Resume Start  -->
    <section id="resume" class="section">
      <div class="container">
        <!-- Servises -->
        <div class="services  mb-6">
          <div class="boxes">
            <h3 class="subtitle">Services</h3>
            <div class="row vertical-line">
              <!-- Item 01 -->
              @foreach ($service as $row)
              <div class="col-md-6">
                <div class="services-box">
                  <img src="{{asset('admin/service/'.$row->image) }}" alt="/">
                  <div class="services-content">
                    <h6 class="services-head">{{$row->name}}</h6>
                    <p class="services-description mb-0">	{!!$row->desc!!}.</p>
                  </div>
                </div>
              </div>
              @endforeach
             

            </div>
          </div>
        </div>
        <!--  Resume  -->
        <div class="resume">
          <!--  TimeLine Education  -->
          <div class="boxes my-6">
            <h3 class="subtitle">Education</h3>
            <div class="row vertical-line">
              <!--  Item 01  -->
              @foreach ($education as $row)
                
             
              <div class="col-md-6">
                <div class="timeline-box">
                  <div class="time-line-header">
                    <p class="timeline-year">{{$row->year}}</p>
                    <h6 class="timeline-title">{{$row->name}}</h6>
                  </div>
                  <div class="timeline-content">
                    <p>{!!$row->desc!!}.</p>
                  </div>
                </div>
              </div>
              @endforeach

            

            </div>
          </div>
          <!--  TimeLine Experience  -->
          <div class="boxes mt-6 mb-3">
            <h3 class="subtitle">Experience</h3>
            <div class="row vertical-line">
              <!--   Item 01   -->
              @foreach ($experience as $row)
              <div class="col-md-6">
                <div class="timeline-box">
                  <div class="time-line-header">
                    <p class="timeline-year">{{$row->year}}</p>
                    <h6 class="timeline-title">{{$row->name}}</h6>
                  </div>
                  <div class="timeline-content">
                    <p>{!!$row->desc!!}.</p>
                  </div>
                </div>
              </div>
              @endforeach
  
           

            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  Resume End  -->

    <!--  Portfolio Start  -->
    <section id="portfolio" class="section portfolio">
      <div class="container">
        <div class="heading-meta-container">
          <h2 class="heading-title">Portfolio</h2>
          <h6 class="description">See My Ausome Work</h6>
        </div>
        <div class="row">
          <!--   Portfolio Filters   -->
          <ul id="portfolio-filter" class="list-inline col-lg-12 portfolio-filter text-center">
            <li class="list-inline-item">
              <a href="javascript:void(0)" data-filter="*" class="active">All</a>
            </li>
            @foreach($category  as $cat)
            <li class="list-inline-item">
              <a href="javascript:void(0)" data-filter=".{{$cat->id}}">{{$cat->name}}</a>
            </li>
            @endforeach
          <!--   <li class="list-inline-item">
              <a href="javascript:void(0)" data-filter=".mobiledesign">Advertisement</a>
            </li>
            <li class="list-inline-item">
              <a href="javascript:void(0)" data-filter=".sound">Voice Over</a>
            </li>
            <li class="list-inline-item">
              <a href="javascript:void(0)" data-filter=".graphic">Graphic Design</a>
            </li> -->
          </ul>
        </div>
        <div class="portfolio-items border-line-v row">
          <!-- Item 01 -->
          @foreach($category  as $cat)
          @php
           $works=App\Models\Work::where('category_id',$cat->id)->get();
          @endphp
           @foreach($works  as $work)
          <div class="col-md-6 col-lg-4 portfolio-item {{$cat->id}}">
            <div class="portfolio-box">
              <div class="portfolio-image">
                <img src="{{asset('admin/work/'.$work->image) }}" alt="/">
                <div class="portfolio-icon">
                  <a href="{{$work->link}}" target="_blank" class="portfolio-magnific mfp-iframe">
                    <i class="bi bi-music-note-beamed"></i>
                  </a>
                </div>
              </div>
              <div class="portfolio-content">
                <h6 class="blog-header">{{$work->name}} </h6>
                <p class="mb-0">{{$work->category->name}}</p>
              </div>
            </div>
          </div>
             @endforeach
          @endforeach
          
         
        </div>
      </div>
    </section>
    <!--  Portfolio End  -->

    <!--  Blog Start  -->
    <section id="blog" class="section blog">
      <div class="container">
        <h3 class="subtitle">Latest News</h3>
        <div class="boxes">
          <div class="row vertical-line">
            @foreach ($blog as $row)
              
           
            <!-- Item 01 -->
            <div class="col-md-6">
              <a href="#" class="blog-box">
                <div class="blog-image">
                  <img src="{{asset('admin/blog/'.$row->image) }}" alt="/">
                  <div class="blog-icon">
                    <i class="bi bi-journal-text"></i>
                  </div>
                </div>
                <div class="blog-post-content">
                  <div class="blog-dates">
                    <span>{{ $row->date }}</span>
                  </div>
                  <h6 class="blog-header">{{$row->title}}</h6>
                  <p class="mb-0"> 	{!!$row->short!!}.</p>
                </div>
              </a>
            </div>
            <!-- Item 02 -->
            @endforeach
      

          </div>
        </div>
      </div>
    </section>
    <!--  Blog End  -->

    <!-- Contact Start -->
    <section id="contact" class="section contact w-100">
      <div class="container">
        <h3 class="subtitle">Get in Touch</h3>
        <!-- Map -->
        <div class="row mt-5">
          <div class="col-lg-12">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29204.49172805514!2d90.37122179454221!3d23.79862560742603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c14d80f870a5%3A0xfb8b9070bd32e7fb!2sMasum%20Billah!5e0!3m2!1sen!2sbd!4v1662031583713!5m2!1sen!2sbd"
              width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="row mt-4">
          <!-- Address Info -->
          <div class="col-12 col-xl-5">
            <div class="row">
              <!--  Item 01 -->
              <div class="col-lg-12">
                <div class="info-box">
                  <div class="item-icon">
                    <img src="{{asset('assets/email.png')}}" alt="/">
                  </div>
                  <div class="info-text">
                    <h5>Mail Me</h5>
                    <small>{{$setting->email}}</small>
                  </div>
                </div>
              </div>
              <!--  Item 02 -->
              <div class="col-lg-12">
                <div class="info-box">
                  <div class="item-icon">
                    <img src="{{asset('assets/phone.png')}}" alt="/">
                  </div>
                  <div class="info-text">
                    <h5>Call Us On</h5>
                    <small>{{$setting->phone}}</small>
                  </div>
                </div>
              </div>
              <!--  Item 03 -->
              <div class="col-lg-12">
                <div class="info-box">
                  <div class="item-icon">
                    <img src="{{asset('assets/what.png')}}" alt="/">
                  </div>
                  <div class="info-text">
                    <h5>WhatsApp</h5>
                    <small>{{$setting->whatsapp}}</small>
                  </div>
                </div>
              </div>
              <!--  Item 04 -->
              <div class="col-lg-12">
                <div class="info-box">
                  <div class="item-icon">
                    <img src="{{asset('assets/address.png')}}" alt="/">
                  </div>
                  <div class="info-text">
                    <h5>Visit office</h5>
                    <small>{{$setting->address}}</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Contact Form -->
          <div class="col-12 col-xl-7">
            <div class="contact-box">
              <div class="contact-form">
                <form action="{{route('contact.store')}}" id="contactForm" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-lg-12 form-item">
                      <div class="form-group">
                        <input name="name" id="name" type="text" class="form-control" placeholder="Complate Name*"
                          required>
                      </div>
                    </div>
                    <div class="col-lg-12 form-item">
                      <div class="form-group">
                        <input name="email" id="email" type="email" class="form-control" placeholder="Email Address*"
                          required>
                      </div>
                    </div>
                    <div class="col-lg-12 form-item">
                      <div class="form-group">
                        <input name="number" id="number" type="tel" class="form-control" placeholder="Phone number*"
                          required>
                      </div>
                    </div>
                    <div class="col-12 form-item">
                      <div class="form-group">
                        <textarea name="msg" id="msg" rows="3" class="form-control textarea"
                          placeholder="Your message..."></textarea>
                      </div>
                    </div>
                    <div class="col-sm-12 text-left">
                      <div class="pill-btn mt-4 mb-3">
                        <button type="submit" class="secondary-button"> Send Message </button>
                      </div>

                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  Contact End  -->

  </main>
  <!--  Main End  -->

  <!--  Mobile Next and Prev Button Start -->
  <div class="next-prev-page d-block d-lg-none">
    <button type="button" class="prev-page bg-base-color hstack">
      <i class="bi bi-chevron-compact-left mx-auto"></i>
    </button>
    <button type="button" class="next-page bg-base-color mt-1 mt-lg-3 hstack">
      <i class="bi bi-chevron-compact-right mx-auto"></i>
    </button>
  </div>
  <!--  Mobile Next and Prev Button End -->

  <!--  Navbar Button Mobile Start -->
  <div class="menu-toggle">
    <span></span>
    <span></span>
    <span></span>
  </div>
  <!--  Navbar Button Mobile End -->

  <!--  Background Shapes Start  -->
  <div class="area">
    <ul class="circles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <!--  Background Shapes End  -->

  <!-- Mouase Magic Cursor Start -->
  <div class="m-magic-cursor mmc-outer"></div>
  <div class="m-magic-cursor mmc-inner"></div>
  <!-- Mouase Magic Cursor End -->

  <!--  JavaScripts  -->
  <!--  Jquery 3.4.1  -->
  <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
  <!--  Bootstrap Js  -->
  <script src="{{asset('assets/js/bootstrap.js')}}"></script>
  <!--  Malihu ScrollBar Js  -->
  <script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
  <!--  CountTo Js  -->
  <script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
  <!--  Swiper Js  -->
  <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
  <!--  Isotope Js  -->
  <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
  <!--  Magnific Popup Js  -->
  <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <!-- Map Js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRemITiP7JRWpZwLhVt-T2x5MeUFE2KWs"></script>
  <!--  Arshia Js  -->
  <script src="{{asset('assets/js/arshia.js')}}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
      @if(Session::has('messege'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                 toastr.info("{{ Session::get('messege') }}");
                 break;
            case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
            case 'warning':
               toastr.warning("{{ Session::get('messege') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
        }
      @endif
   </script>  
</body>



</html>