<?php
if($state['mchState'] == 'preview'){
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
	echo $mnum;
	echo '<br>';
	if($state['addnStatus'] != ""){
		$matchStatus .= $state['addnStatus'].' - ';
	}
	$matchStatus .= $state['status'];
	echo $matchStatus;
	if($clsw_result_series == 'Yes'){
		echo '<br>';
		echo $match['srs'];
	}		  					
	$matchStatus = "";
	echo '</div>';
	echo '</div>';
	echo "</div>";
}
?>