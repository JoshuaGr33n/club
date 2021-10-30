        @extends('layout')
        @section('title', 'Home')
        @section('content') 
 

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

   <!-- LIVE NEWS WIDGET WRAP -->
   <div class="live-news-widget-wrap">
    <!-- LIVE NEWS WIDGET -->
    <div class="live-news-widget grid-limit">
      <!-- LIVE NEWS WIDGET STAIRS -->
      <div class="live-news-widget-stairs left red">
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
      </div>
      <!-- /LIVE NEWS WIDGET STAIRS -->

      <!-- LIVE NEWS WIDGET STAIRS -->
      <div class="live-news-widget-stairs right blue">
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
      </div>
      <!-- /LIVE NEWS WIDGET STAIRS -->

      <!-- LIVE NEWS WIDGET TITLE WRAP -->
      <div class="live-news-widget-title-wrap">
        <img class="live-news-widget-icon" src="{{ asset('public/img/icons/live-news-icon.png') }}" alt="live-news-icon">
        <p class="live-news-widget-title">Live News</p>
      </div>
      <!-- /LIVE NEWS WIDGET TITLE WRAP -->

      <!-- LIVE NEWS WIDGET TEXT WRAP -->
      <div id="lineslide-wrap1" class="live-news-widget-text-wrap">
        <p class="live-news-widget-text"></p>
      </div>
      <!-- /LIVE NEWS WIDGET TEXT WRAP -->
    </div>
    <!-- /LIVE NEWS WIDGET -->
  </div>
  <!-- /LIVE NEWS WIDGET WRAP -->


  <div style="height:50px"></div>

 <!-- LAYOUT CONTENT 1 -->
 <div class="layout-content-1 layout-item-3-1 search-pad grid-limit">
    <!-- LAYOUT BODY -->
    <div class="layout-body layout-item centered">
      <!-- LAYOUT ITEM -->
      <div class="layout-item">
        <!-- POST PREVIEW SET -->
        <div class="post-preview-set">
          <!-- POST PREVIEW SET LEFT -->
          <div class="post-preview-set-left" style="width:800px">
            <!-- POST PREVIEW -->
            <div class="post-preview picture big game-review">
              <!-- POST PREVIEW IMG WRAP -->
              <!-- <a href="post-v2.html"> -->
                <div class="post-preview-img-wrap">
                  <!-- POST PREVIEW IMG -->
                  <figure class="post-preview-img liquid">
                    <img src="{{ asset('public/img/i.jpg') }}" alt="post-16">
                    
                  </figure>
                  <!-- /POST PREVIEW IMG -->

                  <!-- POST PREVIEW OVERLAY -->
                  <div class="post-preview-overlay">
                    <!-- TAG ORNAMENT -->
                    <span class="tag-ornament">Game Reviews</span>
                    <!-- /TAG ORNAMENT -->

                    <!-- POST PREVIEW TITLE -->
                    <p class="post-preview-title">We reviewed the new Magimons game</p>
                    <!-- POST PREVIEW TEXT -->
                    <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                  </div>
                  <!-- /POST PREVIEW OVERLAY -->

                  <!-- REVIEW RATING -->
                  <!-- <div class="review-rating">
                    <div id="content-news-rate-1" class="arc medium"></div>
                  </div> -->
                  <!-- /REVIEW RATING -->
                </div>
              <!-- </a> -->
              <!-- /POST PREVIEW IMG WRAP -->
            </div>
            <!-- /POST PREVIEW -->
          </div>
          <!-- /POST PREVIEW SET LEFT -->

          <!-- //right -->
        </div>
        <!-- /POST PREVIEW SET -->
      </div>
      <!-- /LAYOUT ITEM -->

      

      <!-- LAYOUT CONTENT FULL desktop-->
 <div class="layout-content-full grid-limit desktop">
    <!-- GRID 2 1COL -->
    <div class="grid2-1col">
      <!-- TAB WRAP -->
      <div id="tab-login-register" class="tab-wrap"  style="width:800px">
        <!-- TAB HEADER -->
        <div class="tab-header items-2 border-top">
          <!-- TAB HEADER ITEM -->
          <div class="tab-header-item blue" style="width:33%">
            <!-- TAB HEADER ITEM TEXT -->
            <p class="tab-header-item-text">Goal Chart</p>
            <!-- /TAB HEADER ITEM TEXT -->
          </div>
          <!-- /TAB HEADER ITEM -->

          <!-- TAB HEADER ITEM -->
          <div class="tab-header-item red" style="width:33%">
            <!-- TAB HEADER ITEM TEXT -->
            <p class="tab-header-item-text">Assist Chart</p>
            <!-- /TAB HEADER ITEM TEXT -->
          </div>
          <!-- /TAB HEADER ITEM -->


           <!-- TAB HEADER ITEM -->
           <div class="tab-header-item violet" style="width:33%">
            <!-- TAB HEADER ITEM TEXT -->
            <p class="tab-header-item-text">Clean Sheet Chart</p>
            <!-- /TAB HEADER ITEM TEXT -->
          </div>
          <!-- /TAB HEADER ITEM -->

        </div>
        <!-- /TAB HEADER -->

        <!-- TAB BODY -->
        <div class="tab-body">

        <!-- TAB ITEM -->
        <div class="tab-item">



           <!-- WIDGET ITEM -->
       <div class="widget-item">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap blue small-space">
          <h2 class="section-title medium">Goals: Top 5</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

        <!-- TABLE -->
        <div class="table standings full" style="width:50%;margin:auto">
          <!-- TABLE ROW HEADER -->
          <div class="table-row-header">
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item position">
              <p class="table-row-header-title">Member</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
    
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded">
              <p class="table-row-header-title">Goal</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->

          
          </div>
          <!-- /TABLE ROW HEADER -->
    
          <!-- TABLE ROWS -->
          <div class="table-rows">
            @foreach($goal_chart as $chart)
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
                   @if(\Illuminate\Support\Facades\Auth::check())
                   <p class="team-name"><a href="{{url('profile')}}/{{$member->username}}" style="text-decoration:none; color:black">{{$member->fname}} {{$member->lname}}</a></p>
                   @else
                    <p class="team-name">{{$member->fname}} {{$member->lname}}</p>
                   @endif 
                    <p class="team-country">{{$member->username}}</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                 @if(!empty($chart->total_goal)) <p class="table-text bold">{{$chart->total_goal}} @else <p class="table-text bold">--</p> @endif</p>
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
            @endforeach
         
          </div>
          <!-- /TABLE ROWS -->

          @if(\Illuminate\Support\Facades\Auth::check())
          @if(count($goal_chart)>5)

            <!-- TABLE ROW -->
            <div class="table-row">
           
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bold"><a href="{{url('chart')}}/goal" class="mobile-menu-item-link">See all>></a></p>
              </div>
              <!-- /TABLE ROW ITEM -->
    
            </div>
            <!-- /TABLE ROW -->
            @endif
            @endif


        </div>
        <!-- /TABLE -->
    
       
      </div>
      <!-- /WIDGET ITEM -->


          </div>
          <!-- /TAB ITEM -->




          <!-- TAB ITEM -->
          <div class="tab-item">


            <!-- WIDGET ITEM -->
       <div class="widget-item">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap red small-space">
          <h2 class="section-title medium">Assists: Top 5</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

        <!-- TABLE -->
        <div class="table standings full" style="width:50%;margin:auto">
          <!-- TABLE ROW HEADER -->
          <div class="table-row-header">
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item position">
              <p class="table-row-header-title"></p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
    
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded">
              <p class="table-row-header-title">Assist</p>
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
                   @if(\Illuminate\Support\Facades\Auth::check())
                   <p class="team-name"><a href="{{url('profile')}}/{{$member->username}}" style="text-decoration:none; color:black">{{$member->fname}} {{$member->lname}}</a></p>
                   @else
                    <p class="team-name">{{$member->fname}} {{$member->lname}}</p>
                   @endif 
                    <p class="team-country">{{$member->username}}</p>
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

          @if(\Illuminate\Support\Facades\Auth::check())
          @if(count($assist_chart)>5)

           <!-- TABLE ROW -->
           <div class="table-row">
           
           <!-- TABLE ROW ITEM -->
           <div class="table-row-item">
             
           </div>
           <!-- /TABLE ROW ITEM -->
 
           <!-- TABLE ROW ITEM -->
           <div class="table-row-item">
             <p class="table-text bold"><a href="{{url('chart')}}/assist" class="mobile-menu-item-link">See all>></a></p>
           </div>
           <!-- /TABLE ROW ITEM -->
 
         </div>
         <!-- /TABLE ROW -->
            @endif
            @endif


        </div>
        <!-- /TABLE -->
    
       
      </div>
      <!-- /WIDGET ITEM -->


          </div>
          <!-- /TAB ITEM -->

          <!-- TAB ITEM -->
          <div class="tab-item">


              <!-- WIDGET ITEM -->
       <div class="widget-item">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap violet small-space">
          <h2 class="section-title medium">Clean Sheets: Top 5</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

        <!-- TABLE -->
        <div class="table standings full" style="width:50%;margin:auto">
          <!-- TABLE ROW HEADER -->
          <div class="table-row-header">
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item position">
              <p class="table-row-header-title"></p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
    
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded">
              <p class="table-row-header-title">Clean Sheet</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->

          
          </div>
          <!-- /TABLE ROW HEADER -->
    
          <!-- TABLE ROWS -->
          <div class="table-rows">
            @foreach($clean_sheet_chart as $chart)
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
                   @if(\Illuminate\Support\Facades\Auth::check())
                   <p class="team-name"><a href="{{url('profile')}}/{{$member->username}}" style="text-decoration:none; color:black">{{$member->fname}} {{$member->lname}}</a></p>
                   @else
                    <p class="team-name">{{$member->fname}} {{$member->lname}}</p>
                   @endif 
                    <p class="team-country">{{$member->username}}</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                 @if(!empty($chart->total_clean_sheet)) <p class="table-text bold">{{$chart->total_clean_sheet}} @else <p class="table-text bold">--</p> @endif</p>
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
            @endforeach
         
          </div>
          <!-- /TABLE ROWS -->

          @if(\Illuminate\Support\Facades\Auth::check())
          @if(count($clean_sheet_chart)>5)

            <!-- TABLE ROW -->
            <div class="table-row">
           
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bold"><a href="{{url('chart')}}/clean-sheet" class="mobile-menu-item-link">See all>></a></p>
              </div>
              <!-- /TABLE ROW ITEM -->
    
            </div>
            <!-- /TABLE ROW -->
            @endif
            @endif


        </div>
        <!-- /TABLE -->
    
       
      </div>
      <!-- /WIDGET ITEM -->


          </div>
          <!-- /TAB ITEM -->
        </div>
        <!-- /TAB BODY -->
      </div>
      <!-- /TAB WRAP -->
    </div>
    <!-- /GRID 2 1COL -->
  </div>
  <!-- LAYOUT CONTENT FULL desktop-->







   <!-- LAYOUT CONTENT FULL mobile -->
 <div class="layout-content-full grid-limit mobile">
    <!-- GRID 2 1COL -->
    <div class="grid2-1col">
      <!-- TAB WRAP -->
      <div id="tab-login-register" class="tab-wrap">
        <!-- TAB HEADER -->
        <div class="tab-header items-2 border-top">
          <!-- TAB HEADER ITEM -->
          <div class="tab-header-item blue">
            <!-- TAB HEADER ITEM TEXT -->
            <p class="tab-header-item-text">Goal Chart</p>
            <!-- /TAB HEADER ITEM TEXT -->
          </div>
          <!-- /TAB HEADER ITEM -->

          <!-- TAB HEADER ITEM -->
          <div class="tab-header-item red">
            <!-- TAB HEADER ITEM TEXT -->
            <p class="tab-header-item-text">Assist Chart</p>
            <!-- /TAB HEADER ITEM TEXT -->
          </div>
          <!-- /TAB HEADER ITEM -->


           <!-- TAB HEADER ITEM -->
           <div class="tab-header-item green">
            <!-- TAB HEADER ITEM TEXT -->
            <p class="tab-header-item-text">Clean Sheet Chart</p>
            <!-- /TAB HEADER ITEM TEXT -->
          </div>
          <!-- /TAB HEADER ITEM -->

        </div>
        <!-- /TAB HEADER -->

        <!-- TAB BODY -->
        <div class="tab-body">

        <!-- TAB ITEM -->
        <div class="tab-item">


           <!-- WIDGET ITEM -->
       <div class="widget-item">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap violet small-space">
          <h2 class="section-title medium">Goals: Top 5</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

       
    
        <!-- TABLE -->
        <div class="table standings mobile">
          <!-- TABLE ROW HEADER -->
          <div class="table-row-header">
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item position">
              <p class="table-row-header-title"></p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
    
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Goal</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
           
          </div>
          <!-- /TABLE ROW HEADER -->
    
          <!-- TABLE ROWS -->
          <div class="table-rows">
            @foreach($goal_chart as $chart)
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
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <p class="team-name"><a href="{{url('profile')}}/{{$member->username}}" style="text-decoration:none; color:black">{{$member->fname}} {{$member->lname}}</a></p>
                    @else
                    <p class="team-name">{{$member->fname}} {{$member->lname}}</p>
                    @endif
                    <p class="team-country">{{$member->username}}</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bold">
                 @if(!empty($chart->total_goal)) {{$chart->total_goal}} @else -- @endif
                </p>
              </div>
              <!-- /TABLE ROW ITEM -->
    
             
               
            </div>
            <!-- /TABLE ROW -->
            @endforeach
           
          </div>
          <!-- /TABLE ROWS -->
          @if(\Illuminate\Support\Facades\Auth::check())
          @if(count($goal_chart)>5)
           <!-- TABLE ROW -->
           <div class="table-row">
           
           <!-- TABLE ROW ITEM -->
           <div class="table-row-item">
             
           </div>
           <!-- /TABLE ROW ITEM -->
 
           <!-- TABLE ROW ITEM -->
           <div class="table-row-item">
             <p class="table-text bold"><a href="{{url('chart')}}/goal" class="mobile-menu-item-link">See all>></a></p>
           </div>
           <!-- /TABLE ROW ITEM -->
 
         </div>
         <!-- /TABLE ROW -->

            @endif
            @endif


        </div>
        <!-- /TABLE -->

      </div>
      <!-- /WIDGET ITEM -->




          </div>
          <!-- /TAB ITEM -->




          <!-- TAB ITEM -->
          <div class="tab-item">
            

             <!-- WIDGET ITEM -->
       <div class="widget-item">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap violet small-space">
          <h2 class="section-title medium">Assists: Top 5</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

       
    
        <!-- TABLE -->
        <div class="table standings mobile">
          <!-- TABLE ROW HEADER -->
          <div class="table-row-header">
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item position">
              <p class="table-row-header-title"></p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
    
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Assist</p>
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
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <p class="team-name"><a href="{{url('profile')}}/{{$member->username}}" style="text-decoration:none; color:black">{{$member->fname}} {{$member->lname}}</a></p>
                    @else
                    <p class="team-name">{{$member->fname}} {{$member->lname}}</p>
                    @endif
                    <p class="team-country">{{$member->username}}</p>
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
          @if(\Illuminate\Support\Facades\Auth::check())
          @if(count($assist_chart)>5)
            <!-- TABLE ROW -->
            <div class="table-row">
           
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bold"><a href="{{url('chart')}}/assist" class="mobile-menu-item-link">See all>></a></p>
              </div>
              <!-- /TABLE ROW ITEM -->
    
            </div>
            <!-- /TABLE ROW -->

            @endif
            @endif


        </div>
        <!-- /TABLE -->

      </div>
      <!-- /WIDGET ITEM -->


          </div>
          <!-- /TAB ITEM -->

          <!-- TAB ITEM -->
          <div class="tab-item">
             <!-- WIDGET ITEM -->
       <div class="widget-item">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap violet small-space">
          <h2 class="section-title medium">Clean Sheets: Top 5</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

       
    
        <!-- TABLE -->
        <div class="table standings mobile">
          <!-- TABLE ROW HEADER -->
          <div class="table-row-header">
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item position">
              <p class="table-row-header-title"></p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
    
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Clean Sheet</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
           
          </div>
          <!-- /TABLE ROW HEADER -->
    
          <!-- TABLE ROWS -->
          <div class="table-rows">
            @foreach($clean_sheet_chart as $chart)
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
                    @if(\Illuminate\Support\Facades\Auth::check())
                    <p class="team-name"><a href="{{url('profile')}}/{{$member->username}}" style="text-decoration:none; color:black">{{$member->fname}} {{$member->lname}}</a></p>
                    @else
                    <p class="team-name">{{$member->fname}} {{$member->lname}}</p>
                    @endif
                    <p class="team-country">{{$member->username}}</p>
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bold">
                 @if(!empty($chart->total_clean_sheet)) {{$chart->total_clean_sheet}} @else -- @endif
                </p>
              </div>
              <!-- /TABLE ROW ITEM -->
    
             
               
            </div>
            <!-- /TABLE ROW -->
            @endforeach
           
          </div>
          <!-- /TABLE ROWS -->
          @if(\Illuminate\Support\Facades\Auth::check())
          @if(count($clean_sheet_chart)>5)
           <!-- TABLE ROW -->
           <div class="table-row">
           
           <!-- TABLE ROW ITEM -->
           <div class="table-row-item">
             
           </div>
           <!-- /TABLE ROW ITEM -->
 
           <!-- TABLE ROW ITEM -->
           <div class="table-row-item">
             <p class="table-text bold"><a href="{{url('chart')}}/clean-sheet" class="mobile-menu-item-link">See all>></a></p>
           </div>
           <!-- /TABLE ROW ITEM -->
 
         </div>
         <!-- /TABLE ROW -->

            @endif
            @endif


        </div>
        <!-- /TABLE -->

      </div>
      <!-- /WIDGET ITEM -->
          </div>
          <!-- /TAB ITEM -->
        </div>
        <!-- /TAB BODY -->
      </div>
      <!-- /TAB WRAP -->
    </div>
    <!-- /GRID 2 1COL -->
  </div>
  <!-- LAYOUT CONTENT FULL mobile-->

    

      
    </div>
    <!-- /LAYOUT BODY -->

    <!-- LAYOUT SIDEBAR -->
    <div class="layout-sidebar layout-item gutter-medium">


     

      <!-- WIDGET SIDEBAR -->
      <div class="widget-sidebar">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap blue">
          <h2 class="section-title medium">Calendar</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

        <!-- CALENDAR -->
        <div id="calendar-sidebar" class="calendar small blue">
          <!-- CALENDAR HEADER -->
          <div class="calendar-header">
            <!-- CALENDAR HEADER TOP -->
            <div class="calendar-header-top">
              <!-- CALENDAR CONTROLS -->
              <div id="calendar1-controls" class="calendar-controls slider-controls blue">
                <div class="slider-control control-previous">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                </div>
                <div class="slider-control control-next">
                  <!-- ARROW ICON -->
                  <svg class="arrow-icon medium">
                    <use xlink:href="#svg-arrow-medium"></use>
                  </svg>
                  <!-- /ARROW ICON -->
                </div>
              </div>
              <!-- /CALENDAR CONTROLS -->
              <p class="calendar-month-year"><span class="calendar-month"></span><span class="calendar-year"></span></p>
            </div>
            <!-- /CALENDAR HEADER TOP -->

            <!-- CALENDAR HEADER BOTTOM -->
            <div class="calendar-header-bottom"></div>
            <!-- /CALENDAR HEADER BOTTOM -->
          </div>
          <!-- /CALENDAR HEADER -->

          <!-- CALENDAR BODY -->
          <div class="calendar-body"></div>
          <!-- /CALENDAR BODY -->
        </div>
        <!-- /CALENDAR -->
      </div>
      <!-- /WIDGET SIDEBAR -->
    </div>
    <!-- /LAYOUT SIDEBAR -->
  </div>
  <!-- /LAYOUT CONTENT 1 -->


      
 


  <!-- <div style="height:10px"></div> -->

  @stop