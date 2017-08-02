<?php
$clsw_auto_refresh_option = get_option('clsw_auto_refresh_option_settings', true);
  if($clsw_auto_refresh_option == 'Yes'){
  		$clsw_auto_refresh_select = get_option('clsw_auto_refresh_select_settings', true);
  		$clsw_auto_refresh_sec = $clsw_auto_refresh_select * 60 * 1000;
	  ?>
	  <script type="text/javascript">
	    setInterval("clsw_auto_refresh();",<?php echo $clsw_auto_refresh_sec;?>); 
	    function clsw_auto_refresh(){
	      jQuery('#refresh').load(location.href + ' #refresh');
	      //window.location = location.href;
	    }
	  </script>
  <?php } 
  $url = 'http://synd.cricbuzz.com/j2me/1.0/livematches.xml';
  $xml = simplexml_load_file($url) or die("feed not loading");
  //print_r($xml);
  $matches = $xml->match;
  echo '<div class="clsw_wrapper" id="refresh">';
  echo '<div class="clsw_inner_container">';   

  echo "<div class='match_body'>";
  //print_r($istTime);
  date_default_timezone_set('Asia/Kolkata');
  echo 'Updated score at '. date('H:i:s');  
  echo "</div>";

  foreach ($matches as $key => $match) {
  	$clsw_results = get_option('clsw_results_setting', true);
  	$clsw_score_series = get_option('clsw_score_series_settings', true);
	$clsw_result_series = get_option('clsw_result_series_settings', true);
	$clsw_preview_series = get_option('clsw_preview_series_settings', true);
  	$state = $match->state;
	$mnum = $match['mnum'];
  	$addnStatus = (string) $state['addnStatus'];
  	$status = (string) $state['status'];
  	$Tm = $match->Tm;
  	include 'clsw-running.php';
  	include 'clsw-completed.php';
  	if($clsw_results == 'Yes'){
  		include 'clsw-results.php';
  	}
  	if($clsw_preview_series == 'Yes'){
  		include 'clsw-upcoming.php';
  	}
  }
  echo "</div>";
  echo "</div>";
  ?>