@extends('layout')
        @section('title', '404')
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


 

 
<!-- BANNER WRAP -->
<!-- //forum-banner -->
<div class="banner-wrap">
    <!-- BANNER -->
    <div class="banner grid-limit">
      <h2 class="banner-title">404 Error</h2>
      <p class="banner-sections">
        <span class="banner-section">Requested Page Not Found</span>
        <!-- ARROW ICON -->
        <!-- <svg class="arrow-icon">
          <use xlink:href="#svg-arrow"></use>
        </svg> -->
        <!-- /ARROW ICON -->
        <!-- <span class="banner-section">404 Error Page</span> -->
      </p>
    </div>
    <!-- /BANNER -->
  </div>
  <!-- /BANNER WRAP -->


      
 


  <!-- <div style="height:10px"></div> -->

  @stop