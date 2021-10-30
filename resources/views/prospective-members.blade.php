      @extends('layout')
        @section('title', 'Add New Member')
        @section('content') 
      
        <div style="height:20px"></div>





        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
/* body {
	font-family: 'Varela Round', sans-serif;
} */
.modal-confirm {		
	color: #636363;
	width: 400px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
	text-align: center;
	font-size: 14px;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -10px;
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -2px;
}
.modal-confirm .modal-body {
	color: #999;
}
.modal-confirm .modal-footer {
	border: none;
	text-align: center;		
	border-radius: 5px;
	font-size: 13px;
	padding: 10px 15px 25px;
}
.modal-confirm .modal-footer a {
	color: #999;
}		
.modal-confirm .icon-box {
	width: 80px;
	height: 80px;
	margin: 0 auto;
	border-radius: 50%;
	z-index: 9;
	text-align: center;
	border: 3px solid #f15e5e;
}
.modal-confirm .icon-box i {
	color: #f15e5e;
	font-size: 46px;
	display: inline-block;
	margin-top: 13px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #60c7c1;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	min-width: 120px;
	border: none;
	min-height: 40px;
	border-radius: 3px;
	margin: 0 5px;
}
.modal-confirm .btn-secondary {
	background: #c1c1c1;
}
.modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
	background: #a8a8a8;
}
.modal-confirm .btn-danger {
	background: #f15e5e;
}
.modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
	background: #ee3535;
}
.trigger-btn {
	display: inline-block;

}
</style>




  <!-- WIDGET ITEM -->
  <div class="widget-item" style="width:400px;margin:auto">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap violet small-space">
          <h2 class="section-title medium">Prospective Members</h2>
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
              <p class="table-row-header-title"></p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
           
          </div>
          <!-- /TABLE ROW HEADER -->
    
          <!-- TABLE ROWS -->
          <div class="table-rows">
            @if($prospective_members_count==0)
            No Prospective Member
            @endif

           @foreach($prospective_members as $prospective_member)
            <!-- TABLE ROW -->
            <div class="table-row">
              <!-- TABLE ROW ITEM -->
              <div class="table-row-item position">
                <!-- TABLE TEXT -->
                <p class="table-text">{{ ++$i }}</p>
                <!-- /TABLE TEXT -->
    
                <!-- TEAM INFO WRAP -->
                <div class="team-info-wrap">
                  <!-- TEAM LOGO -->
                  <!-- <img class="team-logo small" src="img/teams/logos/01.png" alt="logo-01"> -->
                  <!-- /TEAM LOGO -->
                  
                  <!-- TEAM INFO -->
                  <div class="team-info">
                    <p class="team-name">{{$prospective_member->email}}</p>
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
                  <!-- BUTTON -->
                  <button class="button tiny red log-button  trigger-btn" style="width:50%" href="#myModal{{$prospective_member->id}}" data-toggle="modal"> Remove </button>
                  <!-- /BUTTON -->
                </p>
              </div>
              <!-- /TABLE ROW ITEM -->


            </div>
            <!-- /TABLE ROW -->
            @endforeach
            {{-----$prospective_members->links()------}}
          </div>
          <!-- /TABLE ROWS -->
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
              <p class="table-row-header-title"></p>
            </div>
            <!-- /TABLE ROW HEADER ITEM -->
          </div>
          <!-- /TABLE ROW HEADER -->
    
          <!-- TABLE ROWS -->
          <div class="table-rows">
            @if($prospective_members_count==0)
            No Prospective Member
            @endif
            @foreach($prospective_members as $prospective_member)
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
                    <p class="team-name">{{$prospective_member->email}}</p>
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
                  <!-- BUTTON -->
                  <button class="button tiny red log-button  trigger-btn" style="width:50%" href="#myModal{{$prospective_member->id}}" data-toggle="modal"> Remove </button>
                  <!-- /BUTTON -->
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

 
  @foreach($prospective_members as $prospective_member)
   <!-- Modal HTML -->
<div id="myModal{{$prospective_member->id}}" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>						
				<h4 class="modal-title w-100">Are you sure? </h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to delete this record? This process cannot be undone.</p>
			</div>
      
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <form method="post" action="{{url('delete-prospective-members')}}">
          @csrf
          <input type="hidden" name="id" value="{{$prospective_member->id}}">
				  <button type="submit" class="btn btn-danger">Delete</button>
        </form>
			</div>
      
		</div>
	</div>
</div>  
@endforeach 
<div style="min-height:150px"></div>

<script>

$(document).ready(function() {
    $('#example').DataTable();
} );

        </script>
           
  @stop
