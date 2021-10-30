 <!-- STATS INFO ITEM -->
 <div class="stats-info-item">
                <!-- STATS INFO ITEM VALUE -->
                <p class="stats-info-item-value"><span class="highlight">@if(!empty($member_chart_record->total_goal)){{$member_chart_record->total_goal}}@else 0 @endif</span> / <span class="highlight">@if(!empty($member_chart_record->total_assist)){{$member_chart_record->total_assist}}@else 0 @endif</span> / <span class="highlight">@if(!empty($member_chart_record->total_clean_sheet)){{$member_chart_record->total_clean_sheet}}@else 0 @endif</span></p>
                <!-- /STATS INFO ITEM VALUE -->
    
                <!-- STATS INFO ITEM DESCRIPTION -->
                <div class="stats-info-item-description">
                  <!-- STATS INFO ITEM DESCRIPTION TITLE -->
                  <p class="stats-info-item-description-title">Record</p>
                  <!-- /STATS INFO ITEM DESCRIPTION TITLE -->
    
                  <!-- STATS INFO ITEM DESCRIPTION TEXT -->
                  <p class="stats-info-item-description-text">Won/Lost/Draw</p>
                  <!-- /STATS INFO ITEM DESCRIPTION TEXT -->
                </div>
                <!-- /STATS INFO ITEM DESCRIPTION -->
              </div>
              <!-- /STATS INFO ITEM -->
