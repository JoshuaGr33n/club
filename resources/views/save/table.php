<!-- WIDGET ITEM -->
<div class="widget-item">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap violet small-space">
          <h2 class="section-title medium">Top 5</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->

        <!-- TABLE -->
        <div class="table standings full">
          <!-- TABLE ROW HEADER -->
          <div class="table-row-header">
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item position">
              <p class="table-row-header-title"></p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
    
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded">
              <p class="table-row-header-title">Goal</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
    
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded">
              <p class="table-row-header-title">Assist</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
    
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded">
              <p class="table-row-header-title">Clean Sheet</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
    
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded">
              <p class="table-row-header-title">Yellow Card</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
    
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded">
              <p class="table-row-header-title">Red Card</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
    
          
          </div>
          <!-- /TABLE ROW HEADER -->
    
          <!-- TABLE ROWS -->
          <div class="table-rows">
            @foreach($home_chart as $chart)
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
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                @if(!empty($chart->total_assist)) <p class="table-text bold">{{$chart->total_assist}}</p> @else <p class="table-text bold">--</p> @endif
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                 @if(!empty($chart->total_clean_sheet)) <p class="table-text bold"> {{$chart->total_clean_sheet}}</p> @else <p class="table-text bold">--</p> @endif
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bold">13</p>
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bold">3</p>
              </div>
              <!-- /TABLE ROW ITEM -->
    
             
            </div>
            <!-- /TABLE ROW -->
            @endforeach
         
          </div>
          <!-- /TABLE ROWS -->

          @if(\Illuminate\Support\Facades\Auth::check())
          @if(count($home_chart)>5)

           <!-- TABLE ROW -->
           <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item position">
                <!-- TABLE TEXT -->
                <p class="table-text"></p>
                <!-- /TABLE TEXT -->
    
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                 
                  
                 
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
               
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bold"><a href="{{url('chart')}}" class="mobile-menu-item-link">See all>></a></p>
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bold"></p>
              </div>
              <!-- /TABLE ROW ITEM -->
    
             
            </div>
            <!-- /TABLE ROW -->
            @endif
            @endif


        </div>
        <!-- /TABLE -->
    
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

             <!-- TABLE ROW HEADER ITEM -->
             <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Assist</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
    
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">C/S</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
    
            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">Y/R</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
          </div>
          <!-- /TABLE ROW HEADER -->
    
          <!-- TABLE ROWS -->
          <div class="table-rows">
            @foreach($home_chart as $chart)
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
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bold">
                 @if(!empty($chart->total_assist)){{$chart->total_assist}} @else -- @endif
                </p>
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bold">
                 @if(!empty($chart->total_clean_sheet)){{$chart->total_clean_sheet}} @else -- @endif
                </p>
              </div>
              <!-- /TABLE ROW ITEM -->

               <!-- TABLE ROW ITEM -->
               <div class="table-row-item">
                <p class="table-text bold">13/3</p>
              </div>
              <!-- /TABLE ROW ITEM -->
            </div>
            <!-- /TABLE ROW -->
            @endforeach
           
          </div>
          <!-- /TABLE ROWS -->
          @if(\Illuminate\Support\Facades\Auth::check())
          @if(count($home_chart)>5)
           <!-- TABLE ROW -->
           <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item position">
                <!-- TABLE TEXT -->
                <p class="table-text"></p>
                <!-- /TABLE TEXT -->
    
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                  <!-- TEAM INFO -->
                  <div class="team-info">
                  </div>
                  <!-- /TEAM INFO -->
                </div>
                <!-- /TEAM INFO WRAP -->
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
              
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
               
              </div>
              <!-- /TABLE ROW ITEM -->
    
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
               <p class="table-text bold"><a href="{{url('chart')}}" class="mobile-menu-item-link">See all>></a></p>
              </div>
              <!-- /TABLE ROW ITEM -->

               <!-- TABLE ROW ITEM -->
               <div class="table-row-item">
               
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