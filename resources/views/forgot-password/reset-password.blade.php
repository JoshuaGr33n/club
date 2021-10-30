@extends('layout')
        @section('title', 'Login')
        @section('content') 
        @if(\Illuminate\Support\Facades\Auth::check())
      <script>window.location = "{{ URL::to('/') }}";</script>
        @php exit; @endphp
       @else 
        <div style="height:50px"></div>


 <!-- FORM BOX WRAP -->
 <div class="form-box-wrap shadowed">
    <!-- FORM BOX HEADING -->
    <div class="form-box-heading login">
      <!-- FORM BOX HEADING TITLE WRAP -->
      <div class="form-box-heading-title-wrap">
        <!-- FORM BOX HEADING TITLE -->
        <p class="form-box-heading-title"></p>
        <!-- /FORM BOX HEADING TITLE -->

        <!-- FORM BOX HEADING SUBTITLE -->
        <p class="form-box-heading-subtitle"></p>
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
          <h2 class="section-title medium">Reset Password</h2>
          <div class="section-title-separator"></div>
        </div>
         @if ($duplicate_err = Session::get('duplicate_err'))
           <div class="alert alert-success" style="color:green">
              <p>{{ $duplicate_err }}</p>
           </div>
           @endif

           @if ($success = Session::get('success_message'))
           <div class="alert alert-success" style="color:green">
              <p>{{ $success }}</p>
           </div>
           @endif

        <form class="form-wrap" action="{{url('reset-password-process')}}" method="post">
             @csrf
               <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group"><label for="">{{$email}}</label><input class="form-control"
                        placeholder="Email" type="hidden" name="email" value="{{$email}}">
                    <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                </div>
          <!-- FORM ROW -->
          <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item blue">
              <label for="password" class="rl-label">New Password</label>
              <input type="password" id="password" name="password" placeholder="Enter your new password here..." value="{{old('password')}}">
                                @error('password')
                                    <span class="invalid-feedback" role="alert" style="color:red">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
            <!-- /FORM ITEM -->
          </div>
          <!-- /FORM ROW -->

           <!-- FORM ROW -->
           <div class="form-row">
            <!-- FORM ITEM -->
            <div class="form-item blue">
              <label for="password_confirmation" class="rl-label">Retype Password</label>
              <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repeat Password..." value="{{old('password_confirmation')}}">
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

            <!-- LINK TEXT -->
            <a href="{{url('login')}}" class="link-text-form blue">Login</a>
            <!-- /LINK TEXT -->
          </div>
          <!-- /FORM CONFIRM ROW -->

          <!-- FORM ACTIONS -->
          <div class="form-actions full">
            <!-- BUTTON -->
            <button class="button blue full">Save</button>
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
        <!-- <p class="tab-form-button">Register</p> -->
        <!-- /TAB FORM BUTTON -->
      </div>
      <!-- /TAB FORM BUTTONS -->
    </div>
    <!-- /FORM BOX BODY -->
  </div>
  <!-- /FORM BOX WRAP -->

  <div style="height:50px"></div>
  @endif
  @stop
