<?php
if(($state['mchState'] == 'inprogress') || ($state['mchState'] == 'lunch') || ($state['mchState'] == 'tea') || ($state['mchState'] == 'stump')){
  	echo '<div class="clsw_single_container">';
  	echo '<div class="clsw_full_width">';
  	echo '<div class="clsw_team_titles">';
  	$btTm = $match->mscr->btTm;
  	echo $btTm['sName'];
  	echo '</div>';
  	echo '<div class="clsw_desc_container">';
  	$btTmInngs = $match->mscr->btTm->Inngs;
  	$batsArr = array();
  	foreach ($btTmInngs as $key => $inn) {
	  	$score = "";
	  	$score = $inn['r'].'/'.$inn['wkts'];
	  	if($inn['Decl'] == 1){
	  		$score .= 'D';
	  	}
	  	$score .= ' ('.$inn['ovrs'].')';
	  	array_push($batsArr, $score);
  	}
	print_r(implode(', ', array_reverse($batsArr)));
  	echo '</div>';
  	echo '</div>';
  	echo '<div class="clsw_full_width">';
  	echo '<div class="clsw_team_titles">';
  	$blgTm = $match->mscr->blgTm;
  	echo $blgTm['sName'];
  	echo '</div>';
  	echo '<div class="clsw_desc_container">';
  	$blgTmInngs = $match->mscr->blgTm->Inngs;
  	$blgsArr = array();
  	foreach ($blgTmInngs as $key => $inn) {
	  	$score = "";
	  	$score = $inn['r'].'/'.$inn['wkts'];
	  	if($inn['Decl'] == 1){
	  		$score .= 'D';
	  	}
	  	$score .= ' ('.$inn['ovrs'].')';
	  	array_push($blgsArr, $score);
  	}
	print_r(implode(', ', array_reverse($blgsArr)));
  	echo '</div>';
  	echo '<div class="clsw_full_width">';
  	$matchStatus = "";
  	if(($addnStatus != "") && ($addnStatus != $status)){
  		$matchStatus .= $addnStatus.' - ';
  	}
  	$matchStatus .= $status;
  	echo $matchStatus;
  	if($clsw_score_series == 'Yes'){
  		echo '<br>';
  		echo $match['srs'];
  	}
  	$matchStatus = "";
  	echo '</div>';
  	echo '</div>';
  	echo "</div>";
}
?>