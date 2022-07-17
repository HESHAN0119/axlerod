<nav class="navbar navbar-expand-sm fixed-top">
    <div class="container">
      <a href="index.html" class="navbar-brand">
        <img src="{{ asset('assets/img/logo.png') }}" id="navbarLogo" height="50" alt="AxleRod Logo" /> <!-- Navigation Bar Logo -->
      </a>

      <!-- Navigation Bar Toggle Button - This will appear only in small screens -->
      <button class="navbar-toggler custom-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <!-- Toggle icon --> <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navigation Bar - Menu Items -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">

          <!-- Find Garage Item -->
          <li class="nav-item mr-2">
            <a href="findgarage.html" id="findGarageButton" class="nav-link menuText text-white px-4 mt-3 mt-md-1 mt-lg-1 mt-xl-1 hmT1"><i class="fas fa-tools mr-2"></i> Find Garage</a>
          </li> <!-- Find Garage Item end-->

          <!-- Home Item -->
          <li class="nav-item mr-2"> 
            <a href="index.html" class="nav-link menuText hmT"><i class="fas fa-home"></i> Home</a>
          </li> <!-- Home Item end-->
          
          <!-- Post Item -->
          <li class="nav-item mr-2"> 
            <a href="post.html" class="nav-link menuText hmT"><i class="fas fa-sticky-note"></i> Post</a>
          </li> <!-- Post Item end-->
          
          <!-- AxleRod dropdown -->
          <li class="nav-item dropdown mr-2"> 
            <a class="nav-link menuText hmT" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false" ><i class="fas fa-globe"></i> AxleRod </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a href="aboutus.html" class="nav-link menuText hmT ml-2 ml-md-0 ml-lg-0 ml-xl-0" >About Us</a>
              <a href="faq.html" class="nav-link menuText hmT ml-2 ml-md-0 ml-lg-0 ml-xl-0" >FAQ</a>
              <a href="contactus.html" class="nav-link menuText hmT ml-2 ml-md-0 ml-lg-0 ml-xl-0" >Contact Us</a>
            </div>
          </li> <!-- AxleRod dropdown end-->

          <!-- Profile dropdown -->
          <li class="nav-item dropdown mr-2"> 
            <a class="nav-link menuText hmT" href="account.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-circle"></i> Profile
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a href="account.html" class="nav-link menuText hmT ml-2 ml-md-0 ml-lg-0 ml-xl-0">Account</a>
              <a href="booking.html" class="nav-link menuText hmT ml-2 ml-md-0 ml-lg-0 ml-xl-0">Booking</a>
              <a class="nav-link menuText hmT ml-2 ml-md-0 ml-lg-0 ml-xl-0" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                  </a>
                                  
              <a href="setting.html" class="nav-link menuText hmT ml-2 ml-md-0 ml-lg-0 ml-xl-0">Settings</a>
            </div>
          </li> <!-- Profile dropdown end-->

        </ul> <!-- Navigation bar unorder-list end -->
      </div> <!-- Navigation Bar Menu Item End -->    
    </div> <!-- Conatiner End -->
  </nav> 