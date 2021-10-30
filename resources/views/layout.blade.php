

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from odindesignthemes.com/pixel-diamond/esports-calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Sep 2021 16:14:32 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- style -->
  <link rel="stylesheet" href="{{ asset('public/css/style.min.css') }}">
  <!-- favicon -->
  <link rel="icon" href="{{ asset('public/img/favicon.ico') }}">


  <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->


  <!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <title>@yield('title')</title>
</head>
@php 
use App\ProspectiveMembers;
$prospective_members_count = ProspectiveMembers::select('*')->count();

@endphp
<body>
  <!-- WIDGET MEDIA WRAP -->
  <div id="popup-watch-video" class="widget-media-wrap popup-display popup-wrap">
    <!-- BUTTON CLOSE -->
    <div class="button-close violet popup-watch-video-trigger">
      <!-- CROSS ICON -->
      <svg class="cross-icon small">
        <use xlink:href="#svg-cross-small"></use>
      </svg>
      <!-- /CROSS ICON -->
    </div>
    <!-- /BUTTON CLOSE -->

    <!-- WIDGET MEDIA R -->
    <div class="widget-media-r">
      <!-- <iframe src="https://player.twitch.tv/?autoplay=false&amp;muted=true&amp;t=03h15m50s&amp;video=v417077870" allowfullscreen></iframe> -->
    </div>
    <!-- /WIDGET MEDIA R -->
  </div>
  <!-- /WIDGET MEDIA WRAP -->

  <!-- SEARCH POPUP -->
  <div class="search-popup">
    <!-- CROSS ICON -->
    <svg class="cross-icon big close-button search-popup-close">
      <use xlink:href="#svg-cross-big"></use>
    </svg>
    <!-- /CROSS ICON -->

    <form method="GET" class="search-popup-form">
      <input type="text" id="search" class="input-line" name="search" placeholder="What are you looking for...?">
    </form>
    <p class="search-popup-text">Write what you are looking for and press enter to begin your search!</p>
  </div>
  <!-- /SEARCH POPUP -->

 <!-- Inventory-->

  <!-- MOBILE MENU WRAP -->
  <div class="mobile-menu-wrap">
    <!-- CROSS ICON -->
    <svg class="cross-icon big mobile-menu-close">
      <use xlink:href="#svg-cross-big"></use>
    </svg>
    <!-- /CROSS ICON -->
    @if(\Illuminate\Support\Facades\Auth::check())
    <!-- SEARCH POPUP OPEN -->
    <svg class="search-popup-open search-icon">
      <use xlink:href="#svg-search"></use>
    </svg>
    <!-- /SEARCH POPUP OPEN -->
    @endif
    <!-- LOGO IMG -->
    <figure class="logo-img">
      <img src="{{ asset('public/img/247.png') }}" alt="Logo">
    </figure>
    <!-- /LOGO IMG -->

    <!-- MOBILE MENU -->
    <ul class="mobile-menu">
      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="{{url('/')}}" class="mobile-menu-item-link">Home</a>
      </li>
      <!-- /MOBILE MENU ITEM -->

      
      @if(\Illuminate\Support\Facades\Auth::check())
      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="{{url('all-members')}}" class="mobile-menu-item-link">Members</a>
      </li>
      <!-- /MOBILE MENU ITEM -->

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="#" class="mobile-menu-item-link pd-dropdown-handler">Chart</a>
         <!-- ARROW ICON -->
         <svg class="arrow-icon medium">
          <use xlink:href="#svg-arrow-medium"></use>
        </svg>
        <!-- /ARROW ICON -->

      
           

            <!-- MOBILE DROPDOWN -->
            <ul class="mobile-dropdown pd-dropdown">
              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="{{url('chart')}}" class="mobile-dropdown-item-link">Chart</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

               <!-- MOBILE DROPDOWN ITEM -->
               <li class="mobile-dropdown-item">
                <a href="{{url('chart')}}/goal" class="mobile-dropdown-item-link">Goals</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="{{url('chart')}}/assist" class="mobile-dropdown-item-link">Assists</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="{{url('chart')}}/clean-sheet" class="mobile-dropdown-item-link">Clean Sheets</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->
              @if(Auth::user()->status=="admin")
              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="{{url('manage-chart')}}" class="mobile-dropdown-item-link">Manage Chart</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->
              @endif

              
            </ul>
            <!-- /MOBILE DROPDOWN -->
         
      </li>
      <!-- /MOBILE MENU ITEM -->


       <!-- MOBILE MENU ITEM -->
       <li class="mobile-menu-item">
        <a href="#" class="mobile-menu-item-link">About Us</a>
      </li>
      <!-- /MOBILE MENU ITEM -->
      @endif
     

     

      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        @if(\Illuminate\Support\Facades\Auth::check())
         <p class="mobile-menu-item-link pd-dropdown-handler">
           @if(empty(Auth::user()->pic))
           <img class="widget-option-img user-avatar micro" src="{{ asset('public/img/blank-profile-pic.png') }}" alt="avatar-01"> {{Auth::user()->fname}} {{Auth::user()->lname}}
           @else
           <img class="widget-option-img user-avatar micro" src="{{ asset(Auth::user()->pic) }}" alt="avatar-01"> {{Auth::user()->fname}} {{Auth::user()->lname}}
           @endif
          </p>
          @endif
        <!-- ARROW ICON -->
        <svg class="arrow-icon medium">
          <use xlink:href="#svg-arrow-medium"></use>
        </svg>
        <!-- /ARROW ICON -->

        <!-- MOBILE DROPDOWN -->
        <ul class="mobile-dropdown pd-dropdown">
          <!-- MOBILE DROPDOWN ITEM -->
          <li class="mobile-dropdown-item">
            <p class="mobile-dropdown-item-link pd-dropdown-handler">Main Account</p>
            <!-- ARROW ICON -->
            <svg class="arrow-icon medium">
              <use xlink:href="#svg-arrow-medium"></use>
            </svg>
            <!-- /ARROW ICON -->

            <!-- MOBILE DROPDOWN -->
            <ul class="mobile-dropdown pd-dropdown">
               <!-- MOBILE DROPDOWN ITEM -->
               <li class="mobile-dropdown-item">
                <a href="{{url('my-profile')}}" class="mobile-dropdown-item-link">My Profile</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="{{url('account-settings')}}" class="mobile-dropdown-item-link">Account Settings</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <!-- <li class="mobile-dropdown-item">
                <a href="{{url('my-chart')}}" class="mobile-dropdown-item-link">My Chart</a>
              </li> -->
              <!-- /MOBILE DROPDOWN ITEM -->

              <!-- MOBILE DROPDOWN ITEM -->
              <li class="mobile-dropdown-item">
                <a href="#" class="mobile-dropdown-item-link">Billing Details</a>
              </li>
              <!-- /MOBILE DROPDOWN ITEM -->

              
            </ul>
            <!-- /MOBILE DROPDOWN -->
          </li>
          <!-- /MOBILE DROPDOWN ITEM -->

          
        </ul>
        <!-- /MOBILE DROPDOWN -->
      </li>
      <!-- /MOBILE MENU ITEM -->
      @if(\Illuminate\Support\Facades\Auth::check())
      @if(Auth::user()->status=="admin")
      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="{{url('add-new-member')}}" class="mobile-menu-item-link">Add new Member
          <!-- (<span class="quantity">5</span>) -->
        </a>
      </li>
      <!-- /MOBILE MENU ITEM -->
     
      <!-- MOBILE MENU ITEM -->
      <li class="mobile-menu-item">
        <a href="{{url('prospective-members')}}" class="mobile-menu-item-link">Prospective Members (
          <span class="quantity">{{$prospective_members_count}}</span>)</a>
      </li>
      <!-- /MOBILE MENU ITEM -->
      @endif
      @endif
    </ul>
   
    <!-- /MOBILE MENU -->
  </div>
  <!-- /MOBILE MENU WRAP -->
 
  <!-- HEADER WRAP -->
  <div class="header-wrap">
    <!-- HEADER -->
    <div class="header grid-limit">
      <!-- WIDGET SELECTABLES -->
      <div class="widget-selectables">
        <!-- WIDGET OPTIONS WRAP -->
        <div class="widget-options-wrap">
          <!-- CURRENT OPTION -->
          <div id="lang-dropdown-trigger" class="current-option">
           
            <!-- ARROW ICON -->
            <!-- <svg class="arrow-icon">
              <use xlink:href="#svg-arrow"></use>
            </svg> -->
            <!-- /ARROW ICON -->
          </div>
          <!-- /CURRENT OPTION -->

          <!-- WIDGET OPTIONS -->
          <div id="lang-dropdown" class="widget-options small">
          
          </div>
          <!-- /WIDGET OPTIONS -->
        </div>
        <!-- /WIDGET OPTIONS WRAP -->

        <!-- WIDGET OPTIONS WRAP -->
        <div class="widget-options-wrap">
          <!-- CURRENT OPTION -->
          <div id="curr-dropdown-trigger" class="current-option">
           

            <!-- ARROW ICON -->
            <!-- <svg class="arrow-icon">
              <use xlink:href="#svg-arrow"></use>
            </svg> -->
            <!-- /ARROW ICON -->
          </div>
          <!-- /CURRENT OPTION -->

          <!-- WIDGET OPTIONS -->
          <div id="curr-dropdown" class="widget-options small short">
           
          </div>
          <!-- /WIDGET OPTIONS -->
        </div>
        <!-- /WIDGET OPTIONS WRAP -->
      </div>
      <!-- /WIDGET SELECTABLES -->
 
      <!-- WIDGET SELECTABLES -->
      <div class="widget-selectables">
        @if(\Illuminate\Support\Facades\Auth::check())
        <!-- WIDGET OPTIONS WRAP -->
        <div class="widget-options-wrap">
          <!-- CURRENT OPTION -->
          <div id="account-dropdown-trigger" class="current-option">
            <!-- CURRENT OPTION VALUE -->
            <div class="current-option-value">

               @if(empty(Auth::user()->pic))
               <img class="widget-option-img user-avatar micro" src="{{ asset('public/img/blank-profile-pic.png') }}" alt="avatar-01">
               <p class="widget-option-text">{{Auth::user()->fname}} {{Auth::user()->lname}}</p>
               @else
               <img class="widget-option-img user-avatar micro" src="{{ asset(Auth::user()->pic) }}" alt="avatar-01">
               <p class="widget-option-text">{{Auth::user()->fname}} {{Auth::user()->lname}}</p>
               @endif
            </div>
            <!-- /CURRENT OPTION VALUE -->

            <!-- ARROW ICON -->
            <svg class="arrow-icon">
              <use xlink:href="#svg-arrow"></use>
            </svg>
            <!-- /ARROW ICON -->
          </div>
          <!-- /CURRENT OPTION -->

          <!-- WIDGET OPTIONS -->
          <div id="account-dropdown" class="widget-options short linkable">
            <!-- WIDGET OPTION HEADING -->
            <div class="widget-option-heading blue">
              <p class="widget-option-text">Main Account</p>
            </div>
            <!-- /WIDGET OPTION HEADING -->
            <!-- WIDGET OPTION -->
            <a href="{{url('my-profile')}}" class="widget-option">
              <p class="widget-option-text">My Profile</p>
            </a>
            <!-- /WIDGET OPTION -->
            <!-- WIDGET OPTION -->
            <a href="{{url('account-settings')}}" class="widget-option">
              <p class="widget-option-text">Account Settings</p>
            </a>
            <!-- /WIDGET OPTION -->

            <!-- WIDGET OPTION -->
            <!-- <a href="{{url('my-chart')}}" class="widget-option">
              <p class="widget-option-text">My Chart</p>
            </a> -->
            <!-- /WIDGET OPTION -->

            <!-- WIDGET OPTION -->
            <a href="#" class="widget-option">
              <p class="widget-option-text">Billing Details</p>
            </a>
            <!-- /WIDGET OPTION -->

          </div>
          <!-- /WIDGET OPTIONS -->
        </div>
        <!-- /WIDGET OPTIONS WRAP -->
        @endif
        @if(\Illuminate\Support\Facades\Auth::check())
        @if(Auth::user()->status=="admin")
        <!-- WIDGET OPTIONS WRAP -->
        <div class="widget-options-wrap">
          <!-- CURRENT OPTION -->
          <a href="{{url('add-new-member')}}">
            <div class="current-option">
              <!-- CURRENT OPTION VALUE -->
              <div class="current-option-value">
                <i class="icon-plus widget-option-icon"></i>
                <p class="widget-option-text">Add new Member
                  <!-- <span class="quantity">(5)</span> -->
                </p>
              </div>
              <!-- /CURRENT OPTION VALUE -->
            </div>
          </a>
          <!-- /CURRENT OPTION -->
        </div>
        <!-- /WIDGET OPTIONS WRAP -->
       
        <!-- WIDGET OPTIONS WRAP -->
        <div class="widget-options-wrap">
          <!-- CURRENT OPTION -->
          <a href="{{url('prospective-members')}}">
            <div class="current-option">
              <!-- CURRENT OPTION VALUE -->
              <div class="current-option-value">
                <i class="icon-user widget-option-icon"></i>
                <p class="widget-option-text">Prospective Members
                  <span class="quantity">({{$prospective_members_count}})</span>
                </p>
              </div>
              <!-- /CURRENT OPTION VALUE -->
            </div>
          </a>
          <!-- /CURRENT OPTION -->
        </div>
        <!-- /WIDGET OPTIONS WRAP -->
        @endif
        @endif
        @if(\Illuminate\Support\Facades\Auth::check())
         <!-- BUTTON -->
         <a href="{{url('logout')}}" class="button tiny red log-button">
          Logout
          <!-- BUTTON ORNAMENT -->
          <div class="button-ornament">
            <!-- ARROW ICON -->
            <svg class="arrow-icon">
              <use xlink:href="#svg-arrow"></use>
            </svg>
            <!-- /ARROW ICON -->
          </div>
          <!-- /BUTTON ORNAMENT -->
        </a>
        <!-- /BUTTON -->
        @else
        <!-- BUTTON -->
        <a href="{{url('login')}}" class="button tiny green log-button">
          Login
          <!-- BUTTON ORNAMENT -->
          <div class="button-ornament">
            <!-- ARROW ICON -->
            <svg class="arrow-icon">
              <use xlink:href="#svg-arrow"></use>
            </svg>
            <!-- /ARROW ICON -->
          </div>
          <!-- /BUTTON ORNAMENT -->
        </a>
        <!-- /BUTTON -->
        @endif
      </div>
      <!-- /WIDGET SELECTABLES -->
    </div>
    <!-- /HEADER -->
  </div>
  <!-- /HEADER WRAP -->

  <!-- NAVIGATION WRAP -->
  <nav class="navigation-wrap">
    <!-- NAVIGATION -->
    <div class="navigation grid-limit">
      <!-- LOGO -->
      <div class="logo">
        <!-- LOGO IMG -->
        <figure class="logo-img">
          <img src="{{ asset('public/img/247.png') }}" alt="Logo">
        </figure>
        <!-- /LOGO IMG -->

        <!-- LOGO TEXT -->
        <div class="logo-text">
          <h2 class="logo-title">247
            <span class="highlight">Ballers</span>
          </h2>
          <p class="logo-info">The Latest Gaming News</p>
        </div>
        <!-- /LOGO TEXT -->
      </div>
      <!-- /LOGO -->

      <!-- INVENTORY BUTTON -->
      <div class="inventory-button">
        <!-- INVENTORY ICON -->
        <!-- <svg class="inventory-icon">
          <use xlink:href="#svg-inventory"></use>
        </svg> -->
        <!-- /INVENTORY ICON -->

        <!-- INVENTORY ITEM QUANTITY WRAP -->
        <!-- <div class="inventory-item-quantity-wrap">
          <p class="inventory-item-quantity">2</p>
        </div> -->
        <!-- /INVENTORY ITEM QUANTITY WRAP -->
      </div>
      <!-- /INVENTORY BUTTON -->
      @if(\Illuminate\Support\Facades\Auth::check())
      <!-- SEARCH BUTTON -->
      <div class="search-button search-popup-open">
        <!-- SEARCH ICON -->
        <svg class="search-icon">
          <use xlink:href="#svg-search"></use>
        </svg>
        <!-- /SEARCH ICON -->
      </div>
      <!-- /SEARCH BUTTON -->
     @endif

      <!-- MAIN MENU -->
      <ul class="main-menu">
      
        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item">
          <a href="{{url('/')}}" class="main-menu-item-link">Home</a>
        </li>
        <!-- /MAIN MENU ITEM -->

        @if(\Illuminate\Support\Facades\Auth::check())  

        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item">
          <a href="{{url('all-members')}}" class="main-menu-item-link">Members</a>
        </li>
        <!-- /MAIN MENU ITEM -->

        <!-- MAIN MENU ITEM -->
        <li class="main-menu-item">
          <a href="{{url('chart')}}" class="main-menu-item-link">Chart

           <!-- SVG ARROW -->
           <svg class="arrow-icon">
              <use xlink:href="#svg-arrow"></use>
            </svg>
            <!-- /SVG ARROW -->
          </a>  

           <!-- SUBMENU -->
           <ul class="submenu void" style="margin-left:200px;padding-right:1000px">
            <!-- SUBMENU ITEM -->
            <li class="submenu-item padded">
              <!-- LINK SECTIONS -->
              <div class="link-sections">
               

                

                <!-- LINK SECTION -->
                <div class="link-section">
                 

                  
                  <!-- LINK LIST -->
                  <ul class="link-list">
                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="{{url('chart')}}/goal">Goals</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="{{url('chart')}}/assist">Assists</a>
                    </li>
                    <!-- /LINK LIST ITEM -->

                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <a href="{{url('chart')}}/clean-sheet">Clean Sheet</a>
                    </li>
                    <!-- /LINK LIST ITEM -->
                    @if(Auth::user()->status=="admin")
                    <!-- LINE SEPARATOR -->
                   <div class="line-separator" style="width:100px"></div>
                    <!-- LINK LIST ITEM -->
                    <li class="link-list-item">
                      <!-- BUTTON -->
                    <a href="{{url('manage-chart')}}" class="button tiny success log-button" style="color:white">
                     Manage Chart
                    <!-- BUTTON ORNAMENT -->
                   <div class="button-ornament">
                     <!-- ARROW ICON -->
                    <svg class="arrow-icon">
                      <use xlink:href="#svg-arrow"></use>
                    </svg>
                     <!-- /ARROW ICON -->
                   </div>
                   <!-- /BUTTON ORNAMENT -->
                   </a>
                   <!-- /BUTTON -->
                    </li>
                    <!-- /LINK LIST ITEM -->
                    @endif
                   

                  </ul>
                  <!-- /LINK LIST -->
                </div>
                <!-- /LINK SECTION -->
              </div>
              <!-- /LINK SECTIONS -->

             

              
            </li>
            <!-- /SUBMENU ITEM -->
          </ul>
          <!-- /SUBMENU -->
        </li>
        <!-- /MAIN MENU ITEM -->

         <!-- MAIN MENU ITEM -->
         <li class="main-menu-item">
          <a href="#" class="main-menu-item-link">About Us</a>
        </li>
        <!-- /MAIN MENU ITEM -->

       

       
      </ul>
      <!-- /MAIN MENU -->
      @endif
    </div>
    <!-- NAVIGATION -->
  </nav>
  <!-- /NAVIGATION WRAP -->

  <!-- MOBILE MENU PULL -->
  <div class="mobile-menu-pull mobile-menu-open">
    <!-- MENU PULL ICON -->
    <svg class="menu-pull-icon">
      <use xlink:href="#svg-menu-pull"></use>
    </svg>
    <!-- /MENU PULL ICON -->
  </div>
  <!-- /MOBILE MENU PULL -->


  @yield('content')


  <div style="min-height:200px"></div>
   <!-- FOOTER BOTTOM WRAP -->
   <div class="footer-bottom-wrap">
    <!-- FOOTER BOTTOM -->
    <div class="footer-bottom grid-limit">
      <p class="footer-bottom-text">
        <span class="brand">
          <span class="highlighted">247 Ballers</span> </span>
        <span class="separator">|</span>All Rights Reserved 2021</p>
      <p class="footer-bottom-text">
        <a href="#">Terms and Conditions</a>
        <span class="separator">|</span>
        <a href="#">Privacy Policy</a>
      </p>
    </div>
    <!-- /FOOTER BOTTOM -->
  </div>
  <!-- /FOOTER BOTTOM WRAP -->

<!-- app bundle -->
<!-- <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
<script src="{{ asset('public/js/app.bundle.min.js') }}"></script>

@yield('scripts')
</body>

<!-- Mirrored from odindesignthemes.com/pixel-diamond/esports-calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Sep 2021 16:14:33 GMT -->
</html>