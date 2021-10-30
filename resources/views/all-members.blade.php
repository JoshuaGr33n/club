       @extends('layout')
        @section('title', 'All Members')
        @section('content') 
      
        <div style="height:50px"></div>


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>





  <!-- WIDGET ITEM -->
  <div class="widget-item" style="width:90%;margin:auto">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap violet small-space">
          <h2 class="section-title medium">All Members({{count($all_members)}})</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->
        <table id="example" class="table table-striped table-bordered table standings full" style="width:100%;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Occupation</th>
                <th>Phone</th>
                <th>Email</th>
                <th></th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($all_members as $member)
            <tr>
                <td>
                   <!-- TEAM LOGO -->
                  @if(empty($member->pic))
                  <img class="team-logo small" src="{{ asset('public/img/blank-profile-pic.png') }}" alt="{{$member->fname}} {{$member->lname}}">
                  @else
                  <img class="team-logo small" src="{{ asset($member->pic) }}" alt="{{$member->fname}} {{$member->lname}}">
                  @endif
                  <!-- /TEAM LOGO -->
                  {{$member->fname}} {{$member->lname}}
                </td>
                <td>{{$member->occupation}}</td>
                <td>{{$member->phone}}</td>
                <td>{{$member->email}}</td>
                <td><!-- BUTTON -->
                  <a href="{{url('profile')}}/{{$member->username}}" class="button tiny blue log-button" style="text-decoration:none;">View Profile
          
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
              </td>
               
            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
           <tr>
                <th>Name</th>
                <th>Occupation</th>
                <th>Phone</th>
                <th>Email</th>
                <th></th>
               
            </tr>
        </tfoot>
    </table>
       
    </div>
      <!-- /WIDGET ITEM -->

  <div style="height:50px"></div>

@endsection
@section('scripts')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>

$(document).ready(function() {
    $('#example').DataTable();
} );

</script>
           
  @stop
