@extends('layout')
        @section('title', 'Manage Chart')
        @section('content') 

       
       
     
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> 
      
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

       
       
       


 <!-- BUTTON -->
 <!-- <p class="button violet no-decoration button-popup-demo popup-write-review-trigger">Open Review Popup</p> -->
    <!-- /BUTTON -->

  <!-- WIDGET ITEM -->
  <div class="widget-item" style="width:50%;margin:auto">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap violet small-space desktop">
          <h2 class="section-title medium">Manage Chart  <span  style="margin-left:470px"><a href="{{url('chart')}}"  style="width:60px" class="button tiny btn-success">Back</a></span></h2>
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
              <!-- TABLE ROW HEADER ITEM -->
              <div class="table-row-header-item padded">
              <p class="table-row-header-title"></p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
              <!-- TABLE ROW HEADER ITEM -->
              <div class="table-row-header-item padded">
              <p class="table-row-header-title">
                         <a href="javascript:void(0)"  class="button tiny btn-success" style="width:20px" id="create-new-post">
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                             <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                         </svg>
                        </a> 
              </p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
           
          </div>
          <!-- /TABLE ROW HEADER -->
    
          <!-- TABLE ROWS -->
          <div class="table-rows" id="posts-crud">
          @foreach($charts as $chart)
          @php $member = DB::table('users')->where('id',$chart->member_id)->first(); @endphp
            <!-- TABLE ROW -->
            <div class="table-row" id="post_id_{{ $chart->id }}">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item position">
                <!-- TABLE TEXT -->
                <p class="table-text">01</p>
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
               @if($chart->goal==0)<p class="table-text bold"> -- </p>@else <p class="table-text bold">{{$chart->goal}}</p>@endif
               </div>
              <!-- /TABLE ROW ITEM -->

                 <!-- TABLE ROW ITEM -->
                 <div class="table-row-item">
                    @if($chart->assist==0)<p class="table-text bold"> -- </p>@else<p class="table-text bold"> {{$chart->assist}} </p>@endif
                 </div>
                 <!-- /TABLE ROW ITEM -->
                  <!-- TABLE ROW ITEM -->
                  <div class="table-row-item">
                    @if($chart->clean_sheet==0)<p class="table-text bold"> -- </p>@else<p class="table-text bold"> {{$chart->clean_sheet}} </p>@endif
                 </div>
                 <!-- /TABLE ROW ITEM -->
                  <!-- TABLE ROW ITEM -->
                  <div class="table-row-item">
                    <p class="table-text bold">  
                        <a href="javascript:void(0)" id="edit-post" data-id="{{ $chart->id }}" class="button tiny blue" style="width:20px">
                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                              </svg>
                        </a> 
                   </p>
                
                 </div>
                 <!-- /TABLE ROW ITEM -->
                  <!-- TABLE ROW ITEM -->
                  <div class="table-row-item">
                    <p class="table-text bold"> 
                        <a href="javascript:void(0)" id="delete-post" data-id="{{ $chart->id }}" class="button tiny red delete-post" style="width:20px">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                           </svg>
                      </a> 
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
   
  <div class="widget-item" style="width:90%;margin:auto">

        <!-- SECTION TITLE WRAP -->
       <div class="section-title-wrap violet small-space mobile">
          <h2 class="section-title medium">Manage Chart  <span  style="margin-left:280px"><a href="{{url('chart')}}"  style="width:60px" class="button tiny btn-success">Back</a><span></h2>
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
              <p class="table-row-header-title">G</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->

             <!-- TABLE ROW HEADER ITEM -->
             <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">A</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->


            <!-- TABLE ROW HEADER ITEM -->
            <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">C/S</p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->



             <!-- TABLE ROW HEADER ITEM -->
             <div class="table-row-header-item padded-big">
              <p class="table-row-header-title"></p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->

             <!-- TABLE ROW HEADER ITEM -->
             <div class="table-row-header-item padded-big">
              <p class="table-row-header-title">
                       <a href="javascript:void(0)"  class="button tiny btn-success" style="width:20px" id="create-new-post-mobile">
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                             <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                         </svg>
                        </a> 
              </p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->

           


          </div>
          <!-- /TABLE ROW HEADER -->
    
          <!-- TABLE ROWS -->
          <div class="table-rows" id="posts-crud-mobile">
           @foreach($charts as $chart)
           @php $member = DB::table('users')->where('id',$chart->member_id)->first(); @endphp
            <!-- TABLE ROW -->
            <div class="table-row" id="post_id_mobile_{{ $chart->id }}">
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
                @if($chart->goal==0) --  @else {{$chart->goal}} @endif
                </p>
              </div>
              <!-- /TABLE ROW ITEM -->
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bold">  
                @if($chart->assist==0) --  @else {{$chart->assist}} @endif
                </p>
              </div>
              <!-- /TABLE ROW ITEM -->


                <!-- TABLE ROW ITEM -->
                <div class="table-row-item">
                <p class="table-text bold">  
                @if($chart->clean_sheet==0) --  @else {{$chart->clean_sheet}} @endif
                </p>
              </div>
              <!-- /TABLE ROW ITEM -->



               <!-- TABLE ROW ITEM -->
               <div class="table-row-item">
                <p class="table-text bold">  
                        <a href="javascript:void(0)" id="edit-post-mobile" data-id="{{ $chart->id }}" class="button tiny blue" style="width:20px">
                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                              </svg>
                        </a> 
                </p>
              </div>
              <!-- /TABLE ROW ITEM -->
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item">
                <p class="table-text bold">  
                       <a href="javascript:void(0)" id="delete-post-mobile" data-id="{{ $chart->id }}" class="button tiny red delete-post-mobile" style="width:20px">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                           </svg>
                      </a> 
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








      <div class="modal fade" id="ajax-crud-modal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  

    <div class="modal-header">
       

         <!-- SECTION TITLE WRAP -->
   <div class="section-title-wrap violet">
      <h2 class="section-title medium" id="postCrudModal"></h2>
      <div class="section-title-separator"></div>
    </div>
    <!-- /SECTION TITLE WRAP -->
    </div>
    <div class="modal-body">
        <form id="postForm" name="postForm" class="form-horizontal">
           <input type="hidden" name="post_id" id="post_id">
           
              <!-- FORM ROW -->
        <div class="form-row">
          <!-- FORM ITEM -->
          <div class="form-item red full" style="width:90%;margin:auto">
            <label for="search_topic_status2" class="rl-label">select Member</label>
            <!-- SELECT BLOCK -->
            <div class="select-block">
              <select id="member" name="member" value="" required="">
                 <option value="" hidden>Choose the topic status</option>
                @foreach($all_members as $all_member)
                 <option value="{{$all_member->id}}">{{$all_member->fname}} {{$all_member->lname}}</option>
                @endforeach
              </select>
              <!-- ARROW ICON -->
              <svg class="arrow-icon medium">
                <use xlink:href="#svg-arrow-medium"></use>
              </svg>
              <!-- /ARROW ICON -->
            </div>
            <!-- /SELECT BLOCK -->
          </div>
          <!-- /FORM ITEM -->
    
         
        </div>
        <!-- /FORM ROW -->
             <!-- FORM ROW -->
      <div class="form-row">
        <!-- FORM ITEM -->
        <div class="form-item violet" style="width:90%;margin:auto">
          <label for="review_title" class="rl-label">Goal</label>
          <input type="text" id="goal" name="goal" value="" required="" placeholder="">
        </div>
        <!-- /FORM ITEM -->
      </div>
      <!-- /FORM ROW -->

         <!-- FORM ROW -->
         <div class="form-row">
         <!-- FORM ITEM -->
         <div class="form-item violet" style="width:90%;margin:auto">
           <label for="review_title" class="rl-label">Assist</label>
           <input type="text" id="assist" name="assist" value="" required="" placeholder="">
         </div>
         <!-- /FORM ITEM -->
         </div>
         <!-- /FORM ROW -->

         <!-- FORM ROW -->
         <div class="form-row">
         <!-- FORM ITEM -->
         <div class="form-item violet" style="width:90%;margin:auto">
           <label for="review_title" class="rl-label">Clean Sheet</label>
           <input type="text" id="clean_sheet" name="clean_sheet" value="" required="" placeholder="">
         </div>
         <!-- /FORM ITEM -->
         </div>
         <!-- /FORM ROW -->
      
  

             <!-- FORM ACTIONS -->
      <div class="form-actions">
        <!-- BUTTON -->
        <button class="button violet full" id="btn-save" value="create">Submit</button>
        <!-- /BUTTON -->
      </div>
      <!-- /FORM ACTIONS -->

        </form>
    </div>
    <div class="modal-footer">
        
    </div>
</div>
</div>
</div>








 <!-- moblie modal--> 

<div class="modal fade" id="ajax-crud-modal-mobile" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  

    <div class="modal-header">
       

         <!-- SECTION TITLE WRAP -->
   <div class="section-title-wrap violet">
      <h2 class="section-title medium" id="postCrudModal-mobile"></h2>
      <div class="section-title-separator"></div>
    </div>
    <!-- /SECTION TITLE WRAP -->
    </div>
    <div class="modal-body">
        <form id="postForm-mobile" name="postForm" class="form-horizontal">
           <input type="hidden" name="post_id" id="post_id-mobile">
          
              <!-- FORM ROW -->
        <div class="form-row">
          <!-- FORM ITEM -->
          <div class="form-item red full" style="width:90%;margin:auto">
            <label for="search_topic_status2" class="rl-label">select Member</label>
            <!-- SELECT BLOCK -->
            <div class="select-block">
              <select id="member-mobile" name="member" value="" required="">
                 <option value="" hidden>Choose the topic status</option>
                @foreach($all_members as $all_member)
                 <option value="{{$all_member->id}}">{{$all_member->fname}} {{$all_member->lname}}</option>
                @endforeach
              </select>
              <!-- ARROW ICON -->
              <svg class="arrow-icon medium">
                <use xlink:href="#svg-arrow-medium"></use>
              </svg>
              <!-- /ARROW ICON -->
            </div>
            <!-- /SELECT BLOCK -->
          </div>
          <!-- /FORM ITEM -->
    
         
        </div>
        <!-- /FORM ROW -->
             <!-- FORM ROW -->
      <div class="form-row">
        <!-- FORM ITEM -->
        <div class="form-item violet" style="width:90%;margin:auto">
          <label for="review_title" class="rl-label">Goal</label>
          <input type="text" id="goal-mobile" name="goal" value="" required="" placeholder="">
        </div>
        <!-- /FORM ITEM -->
      </div>
      <!-- /FORM ROW -->

         <!-- FORM ROW -->
         <div class="form-row">
        <!-- FORM ITEM -->
        <div class="form-item violet" style="width:90%;margin:auto">
          <label for="review_title" class="rl-label">Assist</label>
          <input type="text" id="assist-mobile" name="assist" value="" required="" placeholder="">
        </div>
        <!-- /FORM ITEM -->
      </div>
      <!-- /FORM ROW -->

       <!-- FORM ROW -->
       <div class="form-row">
         <!-- FORM ITEM -->
         <div class="form-item violet" style="width:90%;margin:auto">
           <label for="review_title" class="rl-label">Clean Sheet</label>
           <input type="text" id="clean_sheet_mobile" name="clean_sheet" value="" required="" placeholder="">
         </div>
         <!-- /FORM ITEM -->
         </div>
         <!-- /FORM ROW -->

             <!-- FORM ACTIONS -->
      <div class="form-actions">
        <!-- BUTTON -->
        <button class="button violet full" id="btn-save-mobile" value="create">Submit</button>
        <!-- /BUTTON -->
      </div>
      <!-- /FORM ACTIONS -->

        </form>
    </div>
    <div class="modal-footer">
        
    </div>
</div>
</div>
</div>
 <!-- moblie modal--> 

  <div style="height:50px"></div>

@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#create-new-post').click(function () {
        $('#btn-save').val("create-post");
        $('#postForm').trigger("reset");
        $('#postCrudModal').html("Add New Data");
        $('#ajax-crud-modal').modal('show');
    });
 
    $('body').on('click', '#edit-post', function () {
      var post_id = $(this).data('id');
      $.get('manage-chart/'+post_id+'/edit', function (data) {
         $('#postCrudModal').html("Edit Chart");
          $('#btn-save').val("edit-post");
          $('#ajax-crud-modal').modal('show');
          $('#member').val(data.member_id);
          $('#post_id').val(data.id);clean_sheet
          $('#goal').val(data.goal);
          $('#assist').val(data.assist);  
          $('#clean_sheet').val(data.clean_sheet);  
      })
   });
    $('body').on('click', '.delete-post', function () {
        var post_id = $(this).data("id");
      
        if (confirm("Are you sure to delete this record?")) {
        $.ajax({
            type: "DELETE",
            url: "{{ url('manage-chart')}}"+'/'+post_id,
            success: function (data) {
                $("#post_id_" + post_id).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
      }
    });   
  });
 
 if ($("#postForm").length > 0) {
      $("#postForm").validate({
 
     submitHandler: function(form) {
      var actionType = $('#btn-save').val();
      $('#btn-save').html('Saving..');
      
      $.ajax({
          data: $('#postForm').serialize(),
          url: "{{ route('manage-chart.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
             
              
              var post = '<div class="table-row" id="post_id_' + data.id + '"><div class="table-row-item position"><p class="table-text">01</p>' + data.id + '<div class="team-info-wrap"> <div class="team-info"><p class="team-name">' + data.member_id + '</p></div></div></div> <div class="table-row-item"><p class="table-text bold">' + data.goal + '</p></div><div class="table-row-item"> <p class="table-text bold">' + data.assist + '</p></div><div class="table-row-item"> <p class="table-text bold">' + data.clean_sheet + '</p></div>'
                    post += '<div class="table-row-item"><p class="table-text bold"><a href="javascript:void(0)" id="edit-post" data-id="' + data.id + '" class="button tiny blue" style="width:20px"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16"><path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/></svg></a></p></div>';
                    post += '<div class="table-row-item"><p class="table-text bold"><a href="javascript:void(0)" id="delete-post" data-id="' + data.id + '" class="button tiny red delete-post" style="width:20px"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/> </svg></a></p></div> </div>'; 
                          
                              
                              
                          
                    
                    
              
              if (actionType == "create-post") {
                  $('#posts-crud').prepend(post);
              } else {
                  $("#post_id_" + data.id).replaceWith(post);
              }
 
              $('#postForm').trigger("reset");
              $('#ajax-crud-modal').modal('hide');
              $('#btn-save').html('Save Changes');
              
          },
          error: function (data) {
              console.log('Error:', data);
              $('#btn-save').html('Save Changes');
          }
      });
      setInterval('location.reload()', 1000);
    }
  })
}
   
  
</script>










<!-- mobile -->




<script>
  $(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#create-new-post-mobile').click(function () {
        $('#btn-save-mobile').val("create-post");
        $('#postForm-mobile').trigger("reset");
        $('#postCrudModal-mobile').html("Add New Data");
        $('#ajax-crud-modal-mobile').modal('show');
    });
 
    $('body').on('click', '#edit-post-mobile', function () {
      var post_id_mobile = $(this).data('id');
      $.get('manage-chart/'+post_id_mobile+'/edit', function (data) {
         $('#postCrudModal-mobile').html("Edit Chart");
          $('#btn-save-mobile').val("edit-post");
          $('#ajax-crud-modal-mobile').modal('show');
          $('#member-mobile').val(data.member_id);
          $('#post_id-mobile').val(data.id);
          $('#goal-mobile').val(data.goal);
          $('#assist-mobile').val(data.assist);  
          $('#clean_sheet_mobile').val(data.clean_sheet);  
      })
     
   });
    $('body').on('click', '.delete-post-mobile', function () {
        var post_id_mobile = $(this).data("id");
        
        if (confirm("Are you sure to delete this record?")) {
        $.ajax({
            type: "DELETE",
            url: "{{ url('manage-chart')}}"+'/'+post_id_mobile,
            success: function (data) {
                $("#post_id_mobile_" + post_id_mobile).remove();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
       
      }
    });   
  });
 
 if ($("#postForm-mobile").length > 0) {
      $("#postForm-mobile").validate({
 
     submitHandler: function(form) {
      var actionType = $('#btn-save-mobile').val();
      $('#btn-save-mobile').html('Saving..');
      
      $.ajax({
          data: $('#postForm-mobile').serialize(),
          url: "{{ route('manage-chart.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
             
            
            var post = '<div class="table-row" id="post_id_mobile_' + data.id + '"><div class="table-row-item position"><p class="table-text">01</p>' + data.id + '<div class="team-info-wrap"> <div class="team-info"><p class="team-name">' + data.id + '</p></div></div></div> <div class="table-row-item"><p class="table-text bold">' + data.goal + '</p></div><div class="table-row-item"> <p class="table-text bold">' + data.assist + '</p></div><div class="table-row-item"> <p class="table-text bold">' + data.clean_sheet + '</p></div>'
                    post += '<div class="table-row-item"><p class="table-text bold"><a href="javascript:void(0)" id="edit-post-mobile" data-id="' + data.id + '" class="button tiny blue" style="width:20px"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16"><path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/></svg></a></p></div>';
                    post += '<div class="table-row-item"><p class="table-text bold"><a href="javascript:void(0)" id="delete-post-mobile" data-id="' + data.id + '" class="button tiny red delete-post-mobile" style="width:20px"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/> </svg></a></p></div> </div>'; 
              
              if (actionType == "create-post") {
                  $('#posts-crud-mobile').prepend(post);
                  
                  
              } else {
                  $("#post_id_mobile_" + data.id).replaceWith(post);
                 
                  
              }
 
              $('#postForm-mobile').trigger("reset");
              $('#ajax-crud-modal-mobile').modal('hide');
              $('#btn-save-mobile').html('Save Changes');

              
               
              
          },
          error: function (data) {
              console.log('Error:', data);
              $('#btn-save-mobile').html('Save Changes');
          }
          
      });
     setInterval('location.reload()', 1000);
      
    }
    
  })
 
}

  
</script>
 <!-- moblie --> 
  @stop
