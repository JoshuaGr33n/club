 
        @extends('layout')
        @section('title', 'Create Account')
        @section('content') 
        <meta name="csrf-token" content="{{ csrf_token() }}">
 <!-- LAYOUT CONTENT 4 -->
 <div class="layout-content-4 layout-item-1-3 grid-limit">
   

    <!-- LAYOUT BODY -->
    <div class="layout-body">
      <!-- SECTION TITLE WRAP -->
      <div class="section-title-wrap blue">
        <h2 class="section-title medium">Create Account</h2>
        <div class="section-title-separator"></div>
      </div>
      <!-- /SECTION TITLE WRAP -->
       <span id="success-message" style="color:green"></span>

      <!-- ACCOUNT SETTINGS FORM -->
      <form class="account-settings-form" id="create-account" enctype="multipart/form-data" method="post">
        @csrf


        <input type="hidden" id="token" name="token" value="{{$token}}">
        
        <!-- FORM ROW -->
        <div class="form-row">
          <!-- FORM ITEM -->
          <div class="form-item half blue">
            <label for="as_first_name" class="rl-label">First Name</label>
            <input type="text" id="fname" name="fname" placeholder="Enter your first name here..." value="{{ old('fname') }}">
            <span style="color:red" id="fname-error"></span>
                             
        </div>
          <!-- /FORM ITEM -->

          <!-- FORM ITEM -->
          <div class="form-item half blue">
            <label for="as_last_name" class="rl-label">Last Name</label>
            <input type="text" id="lname" name="lname" placeholder="Enter your last name here..." value="{{ old('lname') }}">
            <span style="color:red" id="lname-error"></span>
          </div>
          <!-- /FORM ITEM -->
        </div>
        <!-- /FORM ROW -->

         <!-- FORM ROW -->
         <div class="form-row">
          <!-- FORM ITEM -->
          <div class="form-item half blue">
            <label for="as_email" class="rl-label">Email</label>
            <input type="text"  value="{{$email}}" disabled>
            <input type="hidden" id="email" name="email" value="{{$email}}">
            <!-- FORM ITEM MESSAGE -->
            <p class="form-item-message">this is never shown to the public</p>
            <!-- /FORM ITEM MESSAGE -->
          </div>
          <!-- /FORM ITEM -->

          <!-- FORM ITEM -->
          <div class="form-item half blue">
            <label for="phone" class="rl-label">Phone</label>
            <input type="text" id="phone" name="phone" placeholder="Enter your phone number here..." value="{{ old('phone') }}">
            <span style="color:red" id="phone-error"></span>
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
                <input type="radio" id="F" name="gender" value="F">
                <!-- RADIO CIRCLE -->
                <div class="radio-circle blue"></div>
                <!-- RADIO CIRCLE -->
                <label for="F" class="rl-label">Female</label>
              </div>
              <!-- /RADIO ITEM -->
            </div>
            <span style="color:red" id="gender-error"></span>
            <!-- /CHECK RADIO LIST -->
          </div>
          <!-- /FORM ITEM -->

           <!-- FORM ITEM -->
           <div class="form-item half blue">
            <label for="dob" class="rl-label">D.O.B</label>
            <input type="date" id="dob" name="dob" placeholder="" value="{{ old('dob') }}">
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
          <div class="form-item blue">
            <label for="occupation" class="rl-label">Occupation</label>
            <input type="text" id="occupation" name="occupation" placeholder="Enter your occupation here..." value="{{ old('occupation') }}">
            <span style="color:red" id="occupation-error"></span>
            <!-- FORM ITEM MESSAGE -->
            <!-- <p class="form-item-message">people can mention you as <span class="highlight">@james_spiegel</span></p> -->
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
            <textarea name="address" id="address" placeholder="Your Office Address..."></textarea>
            <span style="color:red" id="address-error"></span>
          </div>
          <!-- /FORM ITEM -->
        </div>
        <!-- /FORM ROW -->

        <!-- FORM ROW -->
        <div class="form-row">
          <!-- FORM ITEM -->
          <div class="form-item half blue">
            <label for="as_pwd" class="rl-label">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password here...">
            <span style="color:red" id="password-error"></span>
          </div>
          <!-- /FORM ITEM -->

          <!-- FORM ITEM -->
          <div class="form-item half blue">
            <label for="as_pwd_repeat" class="rl-label">Repeat Password</label>
            <input type="password" id="retype_password" name="retype_password" placeholder="Repeat your new password here...">
            <span style="color:red" id="retype_password-error"></span>
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
              <img class="user-avatar big" src="{{ asset('public/img/blank-profile-pic.png')}}" alt="user-05" id="output">
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
            Submit
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

 $('#create-account').on('submit', function(event){
     event.preventDefault();

     let formData = new FormData(this);

     $('#fname-error').text('');
     $('#lname-error').text('');
     $('#gender-error').text('');
     $('#phone-error').text('');
     $('#dob-error').text('');
     $('#occupation-error').text('');
     $('#address-error').text('');
     $('#password-error').text('');
     $('#retype_password-error').text('');
     
     gender = $('input[name=gender]:checked').val();
     fname = $('#fname').val();
     lname = $('#lname').val();
     phone = $('#phone').val();
     dob = $('#dob').val();
     occupation = $('#occupation').val();
     email = $('#email').val();
     password = $('#password').val();
     retype_password = $('#retype_password').val();
     

     $.ajax({
       url: "{{url('create-account-process')}}",
       type: "POST",
       data:
           
           formData,
           contentType: false,
           processData: false,
       
       success:function(response){
         console.log(response);
         if (response) {
           $('#success-message').html('<div class="alert alert-success">'+response.success+'</div>');
                          
           $("#create-account")[0].reset();

           alert("Registration Successful! You can login now");
                    // window.location = "{{url('/')}}";
           setInterval('location.reload()', 1000);
   
         }

       },
       error: function(response) {
           $('#fname-error').text(response.responseJSON.errors.fname);
           $('#lname-error').text(response.responseJSON.errors.lname);
           $('#phone-error').text(response.responseJSON.errors.phone);
           $('#gender-error').text(response.responseJSON.errors.gender);
           $('#dob-error').text(response.responseJSON.errors.dob);
           $('#occupation-error').text(response.responseJSON.errors.occupation);
           $('#password-error').text(response.responseJSON.errors.password);
           $('#retype_password-error').text(response.responseJSON.errors.retype_password);
           $('#address-error').text(response.responseJSON.errors.address);
          
      
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