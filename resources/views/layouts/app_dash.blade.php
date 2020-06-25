@include('layouts.header')

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="fa fa-spinner fa-pulse fa-3x fa-fw">

            <span class="sr-only">Loading...</span>

          </div>
     </section>

<!-- HEADER -->
<header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>KLINIK GIGI SMILE</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> +62 21 89460044</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 4:00 PM - 09:00 PM (Mon-Sun)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">gigismile@gmail.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="{{ route('index') }}" class="navbar-brand">Dental Care</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
               @guest
               <li><a href="{{ url('/')}}" class="smoothScroll">Home</a></li>
                    <li><a href="{{ route('doctors')}}" class="smoothScroll">Doctors</a></li>
                    <li><a href="{{ route('about')}}" class="smoothScroll">About Us</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('regist') }}">{{ __('Register') }}</a>
                    </li>
               @else
                    <li><a href="{{ route('index')}}" class="smoothScroll">Home</a></li>
                    <li><a href="{{ route('doctors')}}" class="smoothScroll">Doctors</a></li>
                    <li><a href="{{ route('about')}}" class="smoothScroll">About Us</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user/profile') }}">
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('user/history') }}">
                            History
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.logout') }}">
                            Logout
                        </a>
                    </li>
                    <li class="appointment-btn"><a href="{{ route('appointment')}}">Make an appointment</a>
                    </li>
                    @endguest
               </ul>
            </div>
     </div>
</section>


