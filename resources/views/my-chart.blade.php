 
        @extends('layout')
        @section('title', Auth::user()->fname.' '.Auth::user()->lname.': My Chart')
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
          <li class="dropdown-list-item">
            <a href="{{url('my-profile')}}" class="dropdown-list-item-link">My Profile</a>
          </li>
          <!-- /DROPDOWN LIST ITEM -->

           <!-- DROPDOWN LIST ITEM -->
           <li class="dropdown-list-item">
            <a href="{{url('account-settings')}}" class="dropdown-list-item-link">Account Settings</a>
          </li>
          <!-- /DROPDOWN LIST ITEM -->
  
          <!-- DROPDOWN LIST ITEM -->
          <li class="dropdown-list-item  active">
            <a href="#" class="dropdown-list-item-link">My Chart</a>
          </li>
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
   

  

  <!-- WIDGET ITEM -->
  <div class="widget-item" style="width:70%;margin-left:100px">
       
       <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap violet small-space">
         <h2 class="section-title medium">Chart</h2>
         <div class="section-title-separator">  </div>
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

            
          
         </div>
         <!-- /TABLE ROW HEADER -->
   
         <!-- TABLE ROWS -->
         <div class="table-rows">
         @foreach($mychart as $chart)
           <!-- TABLE ROW -->
           <div class="table-row">
             <!-- TABLE ROW ITEM -->
             <div class="table-row-item position">
               <!-- TABLE TEXT -->
               <p class="table-text"></p>
               <!-- /TABLE TEXT -->
   
              
             </div>
             <!-- /TABLE ROW ITEM -->
   
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
               @if($chart->goal==0) <p class="table-text bold">--</p>@else<p class="table-text bold">{{$chart->goal}}</p>@endif
              </div>
             <!-- /TABLE ROW ITEM -->

                <!-- TABLE ROW ITEM -->
                <div class="table-row-item">
                 @if($chart->assist==0) <p class="table-text bold">--</p>@else<p class="table-text bold">{{$chart->assist}}</p>@endif
                </div>
                <!-- /TABLE ROW ITEM -->


                 <!-- TABLE ROW ITEM -->
                 <div class="table-row-item">
                    @if($chart->clean_sheet==0) <p class="table-text bold">--</p>@else<p class="table-text bold">{{$chart->clean_sheet}}</p>@endif
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
             <p class="table-row-header-title">Clean Sheet</p>
           </div>
           <!-- /TABLE ROW HEADER ITEM -->


          


         </div>
         <!-- /TABLE ROW HEADER -->
   
         <!-- TABLE ROWS -->
         <div class="table-rows">
         @foreach($mychart as $chart)
       
           <!-- TABLE ROW -->
           <div class="table-row">
             <!-- TABLE ROW ITEM -->
             <div class="table-row-item position">
               <!-- TABLE TEXT -->
               <p class="table-text"></p>
               <!-- /TABLE TEXT -->
   
              
             </div>
             <!-- /TABLE ROW ITEM -->
   
           
             <!-- TABLE ROW ITEM -->
             <div class="table-row-item">
               <p class="table-text bold">  
               @if($chart->goal==0) -- @else {{$chart->goal}} @endif
               </p>
             </div>
             <!-- /TABLE ROW ITEM -->
             <!-- TABLE ROW ITEM -->
             <div class="table-row-item">
               <p class="table-text bold">  
               @if($chart->assist==0) -- @else {{$chart->assist}} @endif
               </p>
             </div>
             <!-- /TABLE ROW ITEM -->


              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
               <p class="table-text bold">  
               @if($chart->clean_sheet==0)-- @else {{$chart->clean_sheet}} @endif
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

  </div>
  <!-- LAYOUT CONTENT 4 -->
  
  
   
  @stop