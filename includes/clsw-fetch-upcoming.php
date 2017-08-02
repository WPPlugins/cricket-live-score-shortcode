<?php
$url = 'http://synd.cricbuzz.com/j2me/1.0/livematches.xml';
$xml = simplexml_load_file($url) or die("feed not loading");
$matches = $xml->match;
echo '<div class="clsw_wrapper">';
echo '<div class="clsw_inner_container">';

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
  	include 'includes/clsw-upcoming.php';
  }
echo "</div>";
echo "</div>";
?>