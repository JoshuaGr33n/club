@extends('layout')
        @section('title', 'Assist Chart')
        @section('content') 
        @php use App\Chart; @endphp
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />  -->
      
        <style>
            a{ text-decoration:none}
            </style>

<style type="text/css">
  @media only screen and (max-width: 800px) {
	  /* .mobile{
		 
	  }
      */

      .desktop{
        display:none
      }

    }


  @media only screen and (min-width: 800px) {
  /* .desktop{
    
  } */
  .mobile{
    display:none
  }
 
 }
  </style>
        <div style="height:20px"></div>

       
       
       




  <!-- WIDGET ITEM -->
  <div class="widget-item" style="width:40%;margin:auto">
       
        <!-- SECTION TITLE WRAP --> 
         <div class="section-title-wrap violet small-space desktop">
          <h2 class="section-title medium">Assist Chart</h2>
          <div class="section-title-separator">  </div>
        </div>
        <!-- /SECTION TITLE WRAP -->
         <!-- TABLE -->
         <div class="table standings full">

          <!-- TABLE ROW HEADER -->
          <div class="table-row-header">
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item position">
              <p class="table-row-header-title">Member</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
            
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded">
              <p class="table-row-header-title">assist</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->

            

             
           
          </div>
          <!-- /TABLE ROW HEADER -->
    
          <!-- TABLE ROWS -->
          <div class="table-rows">
           @foreach($assist_chart as $chart)
            @php $member = DB::table('users')->where('id',$chart->member_id)->first(); @endphp
         
            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item position">
                <!-- TABLE TEXT -->
                <p class="table-text"></p>
                <!-- /TABLE TEXT -->
    
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                  <!-- TEAM LOGO -->
                  @if(empty($member->pic))
                  <img class="team-logo small" src="{{ asset('public/img/blank-profile-pic.png') }}" alt="{{$member->fname}} {{$member->lname}}">
                  @else
                  <img class="team-logo small" src="{{ asset($member->pic) }}" alt="{{$member->fname}} {{$member->lname}}">
                  @endif
                  <!-- /TEAM LOGO -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name"><a href="{{url('profile')}}/{{$member->username}}" style="text-decoration:none; color:black">{{$member->fname}} {{$member->lname}}</a></p>
                    <!-- <p class="team-country">United States</p> -->
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
              
               <!-- TABLE ROW ITEM -->
               <div class="table-row-item">
               @if(!empty($chart->total_assist)) <p class="table-text bold">{{$chart->total_assist}} @else <p class="table-text bold">--</p> @endif</p>
               </div>
              <!-- /TABLE ROW ITEM -->
             
              
                
                


            </div>
            <!-- /TABLE ROW -->
            @endforeach
          </div>
          <!-- /TABLE ROWS -->
        </div>
        <!-- /TABLE -->
    </div>
   <div class="widget-item" style="width:80%;margin:auto">

       <!-- SECTION TITLE WRAP -->
       <div class="section-title-wrap violet small-space mobile">
          <h2 class="section-title medium">Assist Chart </h2>
          <div class="section-title-separator">  </div>
        </div>
        <!-- /SECTION TITLE WRAP -->
    
        <!-- TABLE -->
        <div class="table standings mobile">
          <!-- TABLE ROW HEADER -->
          <div class="table-row-header">
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item position">
              <p class="table-row-header-title">Member</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
    
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">assist</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->

           



          </div>
          <!-- /TABLE ROW HEADER -->
    
          <!-- TABLE ROWS -->
          <div class="table-rows">
            @foreach($assist_chart as $chart)
            @php $member = DB::table('users')->where('id',$chart->member_id)->first(); @endphp
            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item position">
                <!-- TABLE TEXT -->
                <p class="table-text"></p>
                <!-- /TABLE TEXT -->
    
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                  <!-- TEAM LOGO -->
                  <!-- <img class="team-logo small" src="img/teams/logos/01.png" alt="logo-01"> -->
                  <!-- /TEAM LOGO -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name"><a href="{{url('profile')}}/{{$member->username}}" style="text-decoration:none; color:black">{{$member->fname}} {{$member->lname}}</a></p>
                    <!-- <p class="team-country">United States</p> -->
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
            
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bold">  
                @if(!empty($chart->total_assist)) {{$chart->total_assist}} @else -- @endif
                </p>
              </div>
              <!-- /TABLE ROW ITEM -->
             


             
            </div>
            <!-- /TABLE ROW -->

           @endforeach
    
           
          </div>
          <!-- /TABLE ROWS -->
        </div>
        <!-- /TABLE -->
       
       
    </div>
      <!-- /WIDGET ITEM -->



  <div style="height:50px"></div>


  @stop
