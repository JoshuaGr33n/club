       @extends('layout')
        @section('title', 'Add New Member')
        @section('content') 
      
        <div style="height:50px"></div>


 <!-- FORM BOX WRAP -->
 <div class="form-box-wrap shadowed">
    <!-- FORM BOX HEADING -->
    <div class="form-box-heading login">
      <!-- FORM BOX HEADING TITLE WRAP -->
      <div class="form-box-heading-title-wrap">
        <!-- FORM BOX HEADING TITLE -->
        <!-- <p class="form-box-heading-title">Add new Member</p> -->
        <!-- /FORM BOX HEADING TITLE -->

        <!-- FORM BOX HEADING SUBTITLE -->
        <p class="form-box-heading-subtitle">Add new Member</p>
        <!-- /FORM BOX HEADING SUBTITLE -->
      </div>
      <!-- /FORM BOX HEADING TITLE WRAP -->

      <!-- FORM BOX HEADING TEXT -->
      <!-- <p class="form-box-heading-text">Don’t you have an account? <a href="#">Register Now!</a> It will take just a few seconds!</p> -->
      <!-- /FORM BOX HEADING TEXT -->

    </div>
    <!-- /FORM BOX HEADING -->

    <!-- FORM BOX BODY -->
    <div class="form-box-body">
      <!-- FORM BOX -->
      <div class="form-box">
        <!-- SECTION TITLE WRAP -->
        <div class="section-title-wrap blue">
          <h2 class="section-title medium">Enter Email of Prospective Member</h2>
          <div class="section-title-separator"></div>
        </div>
        <!-- /SECTION TITLE WRAP -->
                 @if ($duplicate_err = Session::get('duplicate_err'))
                  <div>
                  <p  style="color:red">{{ $duplicate_err }}</p>
                  </div>
                  @endif

                  @if ($success_message = Session::get('success_message'))
                  <div>
                  <p  style="color:green">{{ $success_message }}</p>
                  </div>
                  @endif

        <!-- FORM WRAP -->
        <form class="form-wrap" action="{{url('addmember')}}" method="post">
             @csrf
               <p>
                {{ $errors->first('email') }}
            
              </p>
          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item blue">
              <label for="login_email_02" class="rl-label">Email Address</label>
              <input type="text" id="login_email_02" name="email" placeholder="Enter email here..." class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                              @error('email')
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->

          <!-- FORM CONFIRM ROW -->
          <div class="form-confirm-row">
            <!-- CHECKBOX ITEM -->
            <div class="checkbox-item">
              <!-- <input type="checkbox" id="login_remember_ep_02" name="login_remember_ep_02" value="remember_ep_02" checked> -->
              <!-- CHECKBOX BOX -->
              <!-- <div class="checkbox-box blue"> -->
                <!-- CROSS ICON -->
                <!-- <svg class="cross-cb-icon small">
                  <use xlink:href="#svg-cross-cb-small"></use>
                </svg> -->
                <!-- /CROSS ICON -->
              <!-- </div> -->
              <!-- CHECKBOX BOX -->
              <!-- <label for="login_remember_ep_02" class="rl-label">Remember Email and Password</label> -->
            </div>
            <!-- /CHECKBOX ITEM -->

         
          </div>
          <!-- /FORM CONFIRM ROW -->

          <!-- FORM ACTIONS -->
          <div class="form-actions full">
            <!-- BUTTON -->
            <button class="button blue full">Submit</button>
            <!-- /BUTTON -->

            <!-- SOCIAL BUTTONS -->
            <div class="social-buttons">
              <!-- BUTTON SOCIAL -->
              <!-- <a href="#" class="button-social fb">Facebook Login</a> -->
              <!-- /BUTTON SOCIAL -->

              <!-- BUTTON SOCIAL -->
              <!-- <a href="#" class="button-social twt">Twitter Login</a> -->
              <!-- /BUTTON SOCIAL -->
            </div>
            <!-- /SOCIAL BUTTONS -->
          </div>
          <!-- /FORM ACTIONS -->
        </form>
        <!-- /FORM WRAP -->
      </div>
      <!-- /FORM BOX -->

      <!-- TAB FORM BUTTONS -->
      <div class="tab-form-buttons">
        <!-- TAB FORM BUTTON -->
        <!-- <p class="tab-form-button selected">Login</p> -->
        <!-- /TAB FORM BUTTON -->

        <!-- TAB FORM BUTTON -->
        <!-- <p class="tab-form-button"><a href="#">Prospective Members</a></p> -->
        <!-- /TAB FORM BUTTON -->
      </div>
      <!-- /TAB FORM BUTTONS -->

     
    </div>
    <!-- /FORM BOX BODY -->
  </div>
  <!-- /FORM BOX WRAP -->

  <div style="height:50px"></div>
 
  @stop
