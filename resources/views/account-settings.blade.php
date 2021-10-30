 
        @extends('layout')
        @section('title', Auth::user()->fname.' '.Auth::user()->lname.': Account Settings')
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
           <li class="dropdown-list-item active">
            <a href="#" class="dropdown-list-item-link">Account Settings</a>
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
      <!-- SECTION TITLE WRAP -->
      <div class="section-title-wrap blue">
        <h2 class="section-title medium">Account Settings</h2>
        <div class="section-title-separator"></div>
      </div>
      <!-- /SECTION TITLE WRAP -->
      <div style="color:green" id="update-success-message">  </div>

      <!-- ACCOUNT SETTINGS FORM -->
      <form class="account-settings-form" id="update-account" enctype="multipart/form-data" method="post">
        @csrf

        <!-- FORM ROW -->
        <div class="form-row">
          <!-- FORM ITEM -->
          <div class="form-item half blue">
            <label for="as_first_name" class="rl-label">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="Enter your first name here..." value="{{Auth::user()->fname}}">
            <span style="color:red" id="fname-error"></span>
                             
        </div>
          <!-- /FORM ITEM -->

          <!-- FORM ITEM -->
          <div class="form-item half blue">
            <label for="as_last_name" class="rl-label">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Enter your last name here..." value="{{Auth::user()->lname}}">
            <span style="color:red" id="lname-error"></span>
          </div>
          <!-- /FORM ITEM -->
        </div>
        <!-- /FORM ROW -->

         <!-- FORM ROW -->
        <div class="form-row">

        <!-- FORM ITEM -->
        <div class="form-item half">
            <label class="rl-label">Gender</label>

           
            <!-- CHECK RADIO LIST -->
            @if (Auth::user()->gender=="M")
            <div class="check-radio-list">
              <!-- RADIO ITEM -->
              <div class="radio-item">
                <input type="radio" id="M" name="gender" value="M" checked>
                <!-- RADIO CIRCLE -->
                <div class="radio-circle blue"></div>
                <!-- RADIO CIRCLE -->
                <label for="M" class="rl-label">Male</label>
              </div>
              <!-- /RADIO ITEM -->

              <!-- RADIO ITEM -->
              <div class="radio-item">
                <input type="radio" id="F" name="gender" value="F">
                <!-- RADIO CIRCLE -->
                <div class="radio-circle blue"></div>
                <!-- RADIO CIRCLE -->
                <label for="F" class="rl-label">Female</label>
              </div>
              <!-- /RADIO ITEM -->
            </div>
            @else
            <div class="check-radio-list">
              <!-- RADIO ITEM -->
              <div class="radio-item">
                <input type="radio" id="M" name="gender" value="M">
                <!-- RADIO CIRCLE -->
                <div class="radio-circle blue"></div>
                <!-- RADIO CIRCLE -->
                <label for="M" class="rl-label">Male</label>
              </div>
              <!-- /RADIO ITEM -->

              <!-- RADIO ITEM -->
              <div class="radio-item">
                <input type="radio" id="F" name="gender" value="F" checked>
                <!-- RADIO CIRCLE -->
                <div class="radio-circle blue"></div>
                <!-- RADIO CIRCLE -->
                <label for="F" class="rl-label">Female</label>
              </div>
              <!-- /RADIO ITEM -->
            </div>
            @endif 
            <span style="color:red" id="gender-error"></span>
            <!-- /CHECK RADIO LIST -->
          </div>
          <!-- /FORM ITEM -->

           <!-- FORM ITEM -->
           <div class="form-item half blue">
            <label for="dob" class="rl-label">D.O.B</label>
            <input type="text" placeholder="MM/DD/YYYY" onfocus="(this.type='date')" onblur="(this.type='text')" value="{{Auth::user()->dob}}" id="dob" name="dob">
            <span style="color:red" id="dob-error"></span>
            <!-- FORM ITEM MESSAGE -->
            <p class="form-item-message"></p>
            <!-- /FORM ITEM MESSAGE -->
          </div>
          <!-- /FORM ITEM -->

        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row">
          <!-- FORM ITEM -->
          <div class="form-item half blue">
            <label for="occupation" class="rl-label">Occupation</label>
            <input type="text" id="occupation" name="occupation" placeholder="Enter your occupation here..." value="{{Auth::user()->occupation}}">
            <span style="color:red" id="occupation-error"></span>
            <!-- FORM ITEM MESSAGE -->
            <!-- <p class="form-item-message">people can mention you as <span class="highlight">@james_spiegel</span></p> -->
            <!-- /FORM ITEM MESSAGE -->
          </div>
          <!-- /FORM ITEM -->
            <!-- FORM ITEM -->
            <div class="form-item half blue">
            <label for="phone" class="rl-label">Phone</label>
            <input type="text"   value="{{Auth::user()->phone}}" id="phone" name="phone">
            <span style="color:red" id="phone-error"></span>
            <span class="text-danger" style="color:red" id="phone_duplicate_error"></span><br>
            <!-- FORM ITEM MESSAGE -->
            <p class="form-item-message"></p>
            <!-- /FORM ITEM MESSAGE -->
          </div>
          <!-- /FORM ITEM -->

        </div>
        <!-- /FORM ROW -->
        <!-- FORM ROW -->
        <div class="form-row">
          <!-- FORM ITEM -->
          <div class="form-item violet">
            <label for="address" class="rl-label">Address</label>
            <textarea name="address" id="address" placeholder="Office Address...">{{Auth::user()->address}}</textarea>
            <span style="color:red" id="address-error"></span>
          </div>
          <!-- /FORM ITEM -->
        </div>
        <!-- /FORM ROW -->

         <!-- FORM ROW -->
         <div class="form-row">
          <!-- FORM ITEM -->
          <div class="form-item half blue">
            <label for="email" class="rl-label">Email</label>
            <input type="text"  value="{{Auth::user()->email}}" id="email" name="email">
            <span style="color:red" id="email-error"></span>
            <span class="text-danger" style="color:red" id="email_duplicate_error"></span><br>
            <!-- FORM ITEM MESSAGE -->
            <!-- <p class="form-item-message">this is never shown to the public</p> -->
            <!-- /FORM ITEM MESSAGE -->
          </div>
          <!-- /FORM ITEM -->

         <!-- FORM ITEM -->
         <div class="form-item half blue">
            <label for="retype_email" class="rl-label">Repeat Email</label>
            <input type="text"  value="{{Auth::user()->email}}" id="retype_email" name="retype_email">
            <span style="color:red" id="retype_email-error"></span>
            <!-- FORM ITEM MESSAGE -->
            <!-- <p class="form-item-message">this is never shown to the public</p> -->
            <!-- /FORM ITEM MESSAGE -->
          </div>
          <!-- /FORM ITEM -->
        </div>
        <!-- /FORM ROW -->


       

        <!-- FORM ROW -->
        <div class="form-row">
          <!-- FORM ITEM -->
          <div class="form-item">
            <label class="rl-label">Profile Photo</label>
            <!-- AVATAR CHANGE -->
            <div class="avatar-change">
              <!-- USER AVATAR -->
              @if(empty(Auth::user()->pic))
              <img class="user-avatar big" src="{{ asset('public/img/blank-profile-pic.png')}}" alt="{{Auth::user()->fname}} {{Auth::user()->lname}}" id="output">
              @else
              <img class="user-avatar big" src="{{ asset(Auth::user()->pic)}}" alt="{{Auth::user()->fname}} {{Auth::user()->lname}}" id="output">
              @endif
              <!-- /USER AVATAR -->

              <label for="profile-pic">
              <!-- AVATAR CHANGE ACTION -->
              <div class="avatar-change-action bubble-ornament blue">
                <!-- PLUS CC 2 ICON -->
                
                <svg class="plus-cc-2-icon medium">
                  <use xlink:href="#svg-plus-cc-2"></use>
                </svg>
               
                <input type="file" accept="image/*" onchange="loadFile(event)" id="profile-pic" name="profile_pic" style="display: none;">

                <!-- /PLUS CC 2 ICON -->
              </div>
              <!-- /AVATAR CHANGE ACTION -->
              </label>

            </div>
            <!-- /AVATAR CHANGE -->

            <!-- FORM ITEM MESSAGE -->
            <p class="form-item-message">100x100px minimum resolution</p>
            <!-- /FORM ITEM MESSAGE -->
          </div>
          <!-- /FORM ITEM -->
        </div>
        <!-- /FORM ROW -->

        
          


        <!-- SUBMIT BUTTON WRAP -->
        <div class="submit-button-wrap">
          <!-- BUTTON -->
          <button class="button blue" type="submit">
            Save Changes
            <!-- BUTTON ORNAMENT -->
            <span class="button-ornament">
              <!-- ARROW ICON -->
              <svg class="arrow-icon medium">
                <use xlink:href="#svg-arrow-medium"></use>
              </svg>
              <!-- /ARROW ICON -->

              <!-- CROSS ICON -->
              <svg class="cross-icon small">
                <use xlink:href="#svg-cross-small"></use>
              </svg>
              <!-- /CROSS ICON -->
            </span>
            <!-- /BUTTON ORNAMENT -->
          </button>
          <!-- /BUTTON -->
        </div>
        <!-- /SUBMIT BUTTON WRAP -->
      </form>
      <!-- /ACCOUNT SETTINGS FORM -->

       <!-- PASSWORD SETTINGS FORM -->
       
       
       <form style="margin-top:50px" id="change-profile-password">
       @csrf
       <div style="color:green" id="message"></div>
       <!-- FORM ROW -->
       <div class="form-row">
          <!-- FORM ITEM -->
          <div class="form-item blue">
            <label for="as_pwd" class="rl-label">Old Password</label>
            <input type="password" id="old_password" name="old_password" placeholder="Enter your current password here...">
            <span style="color:red" id="old_password-error"></span>
            <div style="color:red" id="old-password-err">  </div>
          </div>
          <!-- /FORM ITEM -->

          <!-- FORM ITEM -->
          <div class="form-item blue">
            <label for="as_pwd_repeat" class="rl-label">New Password</label>
            <input type="password" id="new_password" name="new_password" placeholder="Enter your new password here...">
            <span style="color:red" id="new_password-error"></span>
          </div>
          <!-- /FORM ITEM -->

            <!-- FORM ITEM -->
            <div class="form-item blue">
            <label for="as_pwd_repeat" class="rl-label">Repeat New Password</label>
            <input type="password" id="confirm_new_password" name="confirm_new_password" placeholder="Repeat your new password here...">
            <span style="color:red" id="confirm_new_password-error"></span>
          </div>
          <!-- /FORM ITEM -->
          
        </div>
        <!-- /FORM ROW -->
        <!-- SUBMIT BUTTON WRAP -->
        <div class="submit-button-wrap">
          <!-- BUTTON -->
          <button class="button blue" type="submit">
           Save Changes
            <!-- BUTTON ORNAMENT -->
            <span class="button-ornament">
              <!-- ARROW ICON -->
              <svg class="arrow-icon medium">
                <use xlink:href="#svg-arrow-medium"></use>
              </svg>
              <!-- /ARROW ICON -->

              <!-- CROSS ICON -->
              <svg class="cross-icon small">
                <use xlink:href="#svg-cross-small"></use>
              </svg>
              <!-- /CROSS ICON -->
            </span>
            <!-- /BUTTON ORNAMENT -->
          </button>
          <!-- /BUTTON -->
        </div>
        <!-- /SUBMIT BUTTON WRAP -->
      </form>
       <!-- /PASSWORD SETTINGS FORM -->

    </div>
    <!-- /LAYOUT BODY -->
  </div>
  <!-- LAYOUT CONTENT 4 -->
  
  @endsection
  @section('scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
 $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
 });

 $('#update-account').on('submit', function(event){
     event.preventDefault();
     let formData = new FormData(this);

     $('#fname-error').text('');
     $('#lname-error').text('');
     $('#phone-error').text('');
     $('#dob-error').text('');
     $('#occupation-error').text('');
     $('#address-error').text('');
     $('#email-error').text('');
     $('#retype_email-error').text('');
     
     
     gender = $('input[name=gender]:checked').val();
     fname = $('#fname').val();
     lname = $('#lname').val();
     phone = $('#phone').val();
     email = $('#email').val();
     retype_email = $('#retype_email').val();
    

     $.ajax({
       url: "account-settings-process",
       type: "POST",
       data:  
           formData,
           contentType: false,
           processData: false,

       success:function(response){
         console.log(response);
         if (response) {
           $('#update-success-message').text(response.update_success);
           $('#email_duplicate_error').text(response.email_duplicate_error);
           $('#phone_duplicate_error').text(response.phone_duplicate_error);


           if(response.update_success){
                
                $('#email_duplicate_error').hide();
                $('#phone_duplicate_error').hide();
                $('#update-success-message').show();

                setInterval('location.reload()', 1000);
                
             }
             else if(response.email_duplicate_error){
               
                $('#update-success-message').hide();
                $('#email_duplicate_error').show();
               
             }

             else if(response.phone_duplicate_error){
               
               $('#update-success-message').hide();
               $('#phone_duplicate_error').show();
              
            }
          
        //    $("#update-account")[0].reset();
   
         }

        

             
                 
               
       },
       error: function(response) {
           $('#fname-error').text(response.responseJSON.errors.fname);
           $('#lname-error').text(response.responseJSON.errors.lname);
           $('#phone-error').text(response.responseJSON.errors.phone);
           $('#email-error').text(response.responseJSON.errors.email);
           $('#retype_email-error').text(response.responseJSON.errors.retype_email);
           $('#gender-error').text(response.responseJSON.errors.gender);
           $('#dob-error').text(response.responseJSON.errors.dob);
           $('#occupation-error').text(response.responseJSON.errors.occupation);
           $('#address-error').text(response.responseJSON.errors.address);
         
          
      
       }
      });
     });
   </script>


<script type="text/javascript">
 $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
 });

 $('#change-profile-password').on('submit', function(event){
     event.preventDefault();
     $('#old_password-error').text('');
     $('#new_password-error').text('');
     $('#confirm_new_password-error').text('');

     
     old_password = $('#old_password').val();
     new_password = $('#new_password').val();
     confirm_new_password = $('#confirm_new_password').val();
     
    

     $.ajax({
       url: "change-password-process",
       type: "POST",
       data:{
        old_password:old_password,
        new_password:new_password,
        confirm_new_password:confirm_new_password,
          
       },
       success:function(response){
         console.log(response);
         if (response) {
            $('#message').text(response.success);
             $('#old-password-err').text(response.incorrect_password);
             if(response.success){
                
                $('#old-password-err').hide();
                $('#message').show();
                
             }
             else if(response.incorrect_password){
               
                $('#message').hide();
                $('#old-password-err').show();
               
             }
           

           
          
           $("#change-profile-password")[0].reset();
   
         }

        

             
                 
               
       },
       error: function(response) {
           $('#old_password-error').text(response.responseJSON.errors.old_password);
           $('#new_password-error').text(response.responseJSON.errors.new_password);
           $('#confirm_new_password-error').text(response.responseJSON.errors.confirm_new_password);
         
          
      
       }
      });
     });
   </script>



<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
   
  @stop