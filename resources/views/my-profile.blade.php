 
        @extends('layout')
        @section('title', Auth::user()->fname.' '.Auth::user()->lname.': My Profile')
        @section('content') 
        <meta name="csrf-token" content="{{ csrf_token() }}">
 <!-- LAYOUT CONTENT 4 -->
 <div class="layout-content-4 layout-item-1-3 grid-limit">
    <!-- LAYOUT SIDEBAR -->
    <div class="layout-sidebar">
      <!-- ACCOUNT INFO WRAP -->
      <div class="account-info-wrap">
        <!-- USER AVATAR -->
        @if(empty(Auth::user()->pic))
        <img class="user-avatar big" src="{{ asset('public/img/blank-profile-pic.png') }}" alt="{{Auth::user()->fname}} {{Auth::user()->lname}}">
        @else
        <img class="user-avatar big" src="{{ asset(Auth::user()->pic) }}" alt="{{Auth::user()->fname}} {{Auth::user()->lname}}">
        @endif
        <!-- /USER AVATAR -->

        <!-- ACCOUNT INFO NAME -->
        <p class="account-info-username">{{Auth::user()->fname}} {{Auth::user()->lname}}</p>
        <!-- /ACCOUNT INFO NAME -->

        <!-- ACCOUNT INFO USERNAME -->
        <p class="account-info-name">{{Auth::user()->username}}</p>
        <!-- /ACCOUNT INFO USERNAME -->
        @if(Auth::user()->status=="admin")
          <!-- ACCOUNT INFO STATUS -->
          <p class="account-info-name">({{Auth::user()->status}})</p>
        <!-- /ACCOUNT INFO STATUS -->
        @endif

        <!-- ACCOUNT INFO STATS -->
        
        <!-- /ACCOUNT INFO STATS -->

        <!-- DROPDOWN LIST -->
        <ul class="dropdown-list void">
          <!-- DROPDOWN LIST ITEM -->
          <li class="dropdown-list-item active">
            <a href="#" class="dropdown-list-item-link">My Profile</a>
          </li>
          <!-- /DROPDOWN LIST ITEM -->

           <!-- DROPDOWN LIST ITEM -->
           <li class="dropdown-list-item">
            <a href="{{url('account-settings')}}" class="dropdown-list-item-link">Account Settings</a>
          </li>
          <!-- /DROPDOWN LIST ITEM -->
  
          <!-- DROPDOWN LIST ITEM -->
          <!-- <li class="dropdown-list-item">
            <a href="{{url('my-chart')}}" class="dropdown-list-item-link">My Chart</a>
          </li> -->
          <!-- /DROPDOWN LIST ITEM -->
  
          <!-- DROPDOWN LIST ITEM -->
          <li class="dropdown-list-item">
            <a href="#" class="dropdown-list-item-link">Billing Details</a>
          </li>
          <!-- /DROPDOWN LIST ITEM -->
  
        
        </ul>
        <!-- /DROPDOWN LIST -->
      </div>
      <!-- /ACCOUNT INFO WRAP -->
    </div>
    <!-- /LAYOUT SIDEBAR -->
   

    <!-- LAYOUT BODY -->
    <div class="layout-body">
      <!-- WIDGET ITEM -->
    <div class="widget-item">
      <!-- SECTION TITLE WRAP -->
      <div class="section-title-wrap violet">
        <h2 class="section-title medium">My Profile</h2>
        <div class="section-title-separator"></div>
      </div>
      <!-- /SECTION TITLE WRAP -->

      <!-- WIDGET PLAYER OVERVIEW -->
      <div class="widget-player-overview">
        <!-- PLAYER OVERVIEW -->
        <div class="player-overview">
          <!-- PLAYER OVERVIEW IMG WRAP -->
          <!-- <div class="player-overview-img-wrap"> -->
            <!-- PLAYER OVERVIEW IMG -->
            <!-- <img class="player-overview-img" src="img/teams/player-photo.png" alt="player-photo"> -->
            <!-- /PLAYER OVERVIEW IMG -->
          <!-- </div> -->
          <!-- /PLAYER OVERVIEW IMG WRAP -->
  
          <!-- OVERVIEW INFO WRAP -->
          <div class="overview-info-wrap">
            <!-- OVERVIEW INFO -->
            <div class="overview-info">
              <!-- OVERVIEW INFO ITEM -->
              <div class="overview-info-item">
                <!-- OVERVIEW INFO ITEM TITLE -->
                <p class="overview-info-item-title">Username</p>
                <!-- /OVERVIEW INFO ITEM TITLE -->
  
                <!-- OVERVIEW INFO ITEM TEXT -->
                <p class="overview-info-item-text">{{Auth::user()->username}}</p>
                <!-- /OVERVIEW INFO ITEM TEXT -->
              </div>
              <!-- /OVERVIEW INFO ITEM -->
  
              <!-- OVERVIEW INFO ITEM -->
              <div class="overview-info-item">
                <!-- OVERVIEW INFO ITEM TITLE -->
                <p class="overview-info-item-title">Occupation</p>
                <!-- /OVERVIEW INFO ITEM TITLE -->
  
                <!-- OVERVIEW INFO ITEM TEXT -->
                <p class="overview-info-item-text centered">
                  <!-- TEAM LOGO -->
                  <!-- <img class="team-logo" src="img/teams/logos/01.png" alt="logo-01"> -->
                  <!-- /TEAM LOGO -->
                  {{Auth::user()->occupation}}
                </p>
                <!-- /OVERVIEW INFO ITEM TEXT -->
              </div>
              <!-- /OVERVIEW INFO ITEM -->
  
              <!-- OVERVIEW INFO ITEM -->
              <div class="overview-info-item">
                <!-- OVERVIEW INFO ITEM TITLE -->
                <p class="overview-info-item-title">Real Name</p>
                <!-- /OVERVIEW INFO ITEM TITLE -->
  
                <!-- OVERVIEW INFO ITEM TEXT -->
                <p class="overview-info-item-text">{{Auth::user()->fname}} {{Auth::user()->lname}}</p>
                <!-- /OVERVIEW INFO ITEM TEXT -->
              </div>
              <!-- /OVERVIEW INFO ITEM -->

              <!-- OVERVIEW INFO ITEM -->
              <div class="overview-info-item">
                <!-- OVERVIEW INFO ITEM TITLE -->
                <p class="overview-info-item-title">Office Address</p>
                <!-- /OVERVIEW INFO ITEM TITLE -->
  
                <!-- OVERVIEW INFO ITEM TEXT -->
                <p class="overview-info-item-text">{{Auth::user()->address}}</p>
                <!-- /OVERVIEW INFO ITEM TEXT -->
              </div>
              <!-- /OVERVIEW INFO ITEM -->
              
            </div>
            <!-- /OVERVIEW INFO -->
  
            <!-- OVERVIEW INFO -->
            <div class="overview-info">
              <!-- OVERVIEW INFO ITEM -->
              <div class="overview-info-item">
                <!-- OVERVIEW INFO ITEM TITLE -->
                <p class="overview-info-item-title">Email</p>
                <!-- /OVERVIEW INFO ITEM TITLE -->
  
                <!-- OVERVIEW INFO ITEM TEXT -->
                <p class="overview-info-item-text">{{Auth::user()->email}}</p>
                <!-- /OVERVIEW INFO ITEM TEXT -->
              </div>
              <!-- /OVERVIEW INFO ITEM -->
  
              <!-- OVERVIEW INFO ITEM -->
              <div class="overview-info-item">
                <!-- OVERVIEW INFO ITEM TITLE -->
                <p class="overview-info-item-title">Phone</p>
                <!-- /OVERVIEW INFO ITEM TITLE -->
  
                <!-- OVERVIEW INFO ITEM TEXT -->
                <p class="overview-info-item-text">{{Auth::user()->phone}}</p>
                <!-- /OVERVIEW INFO ITEM TEXT -->
              </div>
              <!-- /OVERVIEW INFO ITEM -->
  
              <!-- OVERVIEW INFO ITEM -->
              <div class="overview-info-item">
                <!-- OVERVIEW INFO ITEM TITLE -->
                <p class="overview-info-item-title">Gender</p>
                <!-- /OVERVIEW INFO ITEM TITLE -->
  
                <!-- OVERVIEW INFO ITEM TEXT -->
                <p class="overview-info-item-text">{{Auth::user()->gender}}</p>
                <!-- /OVERVIEW INFO ITEM TEXT -->
              </div>
              <!-- /OVERVIEW INFO ITEM -->
            </div>
            <!-- /OVERVIEW INFO -->
  
            <!-- OVERVIEW INFO -->
            <div class="overview-info">
              <!-- OVERVIEW INFO ITEM -->
              <div class="overview-info-item">
                <!-- OVERVIEW INFO ITEM TITLE -->
                <p class="overview-info-item-title">D.O.B</p>
                <!-- /OVERVIEW INFO ITEM TITLE -->
  
                <!-- OVERVIEW INFO ITEM TEXT -->
                <p class="overview-info-item-text">{{date("d M", strtotime(Auth::user()->dob))}}</p>
                <!-- /OVERVIEW INFO ITEM TEXT -->
              </div>
              <!-- /OVERVIEW INFO ITEM -->
  
              <!-- OVERVIEW INFO ITEM -->
              <div class="overview-info-item">
                <!-- OVERVIEW INFO ITEM TITLE -->
                <p class="overview-info-item-title">Active Member since</p>
                <!-- /OVERVIEW INFO ITEM TITLE -->
  
                <!-- OVERVIEW INFO ITEM TEXT -->
                <p class="overview-info-item-text">{{date("d M Y", strtotime(Auth::user()->created_at))}}</p>
                <!-- /OVERVIEW INFO ITEM TEXT -->
              </div>
              <!-- /OVERVIEW INFO ITEM -->
  
              <!-- OVERVIEW INFO ITEM -->
              <div class="overview-info-item">
                <!-- SOCIAL LINKS -->
                
                <!-- /SOCIAL LINKS -->
              </div>
              <!-- /OVERVIEW INFO ITEM -->
            </div>
            <!-- /OVERVIEW INFO -->
  
            <!-- STATS INFO -->
            <div class="stats-info">
              <!-- STATS INFO ITEM -->
              <div class="stats-info-item">
                <!-- STATS INFO ITEM VALUE -->
                <p class="stats-info-item-value">@if(!empty($member_chart_record->total_goal)){{$member_chart_record->total_goal}}@else 0 @endif<span class="percent"></span></p>
                <!-- /STATS INFO ITEM VALUE -->
    
                <!-- STATS INFO ITEM DESCRIPTION -->
                <div class="stats-info-item-description">
                  <!-- STATS INFO ITEM DESCRIPTION TITLE -->
                  <p class="stats-info-item-description-title">Goal</p>
                  <!-- /STATS INFO ITEM DESCRIPTION TITLE -->
    
                  <!-- STATS INFO ITEM DESCRIPTION TEXT -->
                  <p class="stats-info-item-description-text">Total Goals Scored</p>
                  <!-- /STATS INFO ITEM DESCRIPTION TEXT -->
                </div>
                <!-- /STATS INFO ITEM DESCRIPTION -->
              </div>
              <!-- /STATS INFO ITEM -->

              <!-- STATS INFO ITEM -->
              <div class="stats-info-item">
                <!-- STATS INFO ITEM VALUE -->
                <p class="stats-info-item-value">@if(!empty($member_chart_record->total_assist)){{$member_chart_record->total_assist}}@else 0 @endif</p>
                <!-- /STATS INFO ITEM VALUE -->
    
                <!-- STATS INFO ITEM DESCRIPTION -->
                <div class="stats-info-item-description">
                  <!-- STATS INFO ITEM DESCRIPTION TITLE -->
                  <p class="stats-info-item-description-title">Assists</p>
                  <!-- /STATS INFO ITEM DESCRIPTION TITLE -->
    
                  <!-- STATS INFO ITEM DESCRIPTION TEXT -->
                  <p class="stats-info-item-description-text">Total Assists</p>
                  <!-- /STATS INFO ITEM DESCRIPTION TEXT -->
                </div>
                <!-- /STATS INFO ITEM DESCRIPTION -->
              </div>
              <!-- /STATS INFO ITEM -->

    
              <!-- STATS INFO ITEM -->
              <div class="stats-info-item">
                <!-- STATS INFO ITEM VALUE -->
                <p class="stats-info-item-value">@if(!empty($member_chart_record->total_clean_sheet)){{$member_chart_record->total_clean_sheet}}@else 0 @endif</p>
                <!-- /STATS INFO ITEM VALUE -->
    
                <!-- STATS INFO ITEM DESCRIPTION -->
                <div class="stats-info-item-description">
                  <!-- STATS INFO ITEM DESCRIPTION TITLE -->
                  <p class="stats-info-item-description-title">Clean Sheets</p>
                  <!-- /STATS INFO ITEM DESCRIPTION TITLE -->
    
                  <!-- STATS INFO ITEM DESCRIPTION TEXT -->
                  <p class="stats-info-item-description-text">Total Clean Sheets</p>
                  <!-- /STATS INFO ITEM DESCRIPTION TEXT -->
                </div>
                <!-- /STATS INFO ITEM DESCRIPTION -->
              </div>
              <!-- /STATS INFO ITEM -->
            </div>
            <!-- /STATS INFO -->
          </div>
          <!-- /OVERVIEW INFO WRAP -->
        </div>
        <!-- /PLAYER OVERVIEW -->
      </div>
      <!-- /WIDGET PLAYER OVERVIEW -->
    </div>
    <!-- /WIDGET ITEM -->

    </div>
    <!-- /LAYOUT BODY -->
  </div>
  <!-- LAYOUT CONTENT 4 -->
  
  
   
  @stop