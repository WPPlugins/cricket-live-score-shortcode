<?php

if($state['mchState'] == 'Result'){
	echo '<div class="clsw_single_container">';
	echo '<div class="clsw_full_width">';
	echo '<div class="clsw_desc_container">';
	echo $match['mchDesc'].'<br>';
	echo '</div>';
	echo '<div class="clsw_desc_container">';
	echo '</div>';
	echo '</div>';
	echo '<div class="clsw_full_width">';
	echo '<div class="clsw_full_width">';
	$matchStatus = "";
	if($state['addnStatus'] != ""){
		$matchStatus .= $state['addnStatus'].' - ';
	}
	$matchStatus .= $state['status'];
	echo $matchStatus;
	echo '<br>';
	$mamName = $match->manofthematch->mom;
	if($mamName){
		echo 'Man of the Match: '.$mamName['Name'];
		echo '<br>';
	}
	if($clsw_result_series == 'Yes'){
		echo $match['srs'];
	}		  					
	$matchStatus = "";
	echo '</div>';
	echo '</div>';
	echo "</div>";
}
?>