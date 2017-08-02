<?php settings_fields('clsw_settings_group');
if ( !current_user_can( 'manage_options' ) ) {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
} ?>
<div class="wrap">
	<h2>Cricket Live Score Settings</h2>
	<h4>Settings for Live Score Shortcode</h4>
	<?php if(isset($_POST['clsw_save_settings'])){
		$clsw_display_results = sanitize_text_field( stripslashes( $_POST['clsw_display_results']) );
		$clsw_score_series_name = sanitize_text_field( stripslashes( $_POST['clsw_score_series_name']) );
		$clsw_result_series_name = sanitize_text_field( stripslashes( $_POST['clsw_result_series_name']) );
		$clsw_preview_series_name = sanitize_text_field( stripslashes( $_POST['clsw_preview_series_name']) );
		$clsw_auto_refresh_option = sanitize_text_field( stripslashes( $_POST['clsw_auto_refresh_option']) );
		$clsw_auto_refresh_select = sanitize_text_field( stripslashes( $_POST['clsw_auto_refresh_select']) );
		//$clsw_auto_refresh_custom = sanitize_text_field( stripslashes( $_POST['clsw_auto_refresh_custom']) );
		update_option('clsw_auto_refresh_option_settings', $clsw_auto_refresh_option);
		update_option('clsw_auto_refresh_select_settings', $clsw_auto_refresh_select);
		//update_option('clsw_auto_refresh_custom_settings', $clsw_auto_refresh_custom);
		update_option('clsw_results_setting', $clsw_display_results);
		update_option('clsw_score_series_settings', $clsw_score_series_name);
		update_option('clsw_result_series_settings', $clsw_result_series_name);
		update_option('clsw_preview_series_settings', $clsw_preview_series_name);
	} ?>
	<form action="" method="post">
		<?php $clsw_auto_refresh_option = get_option('clsw_auto_refresh_option_settings', true);
		$clsw_auto_refresh_select = get_option('clsw_auto_refresh_select_settings', true);
		//$clsw_auto_refresh_custom = get_option('clsw_auto_refresh_custom', true);
		$clsw_results = get_option('clsw_results_setting', true);
		$clsw_score_series = get_option('clsw_score_series_settings', true);
		$clsw_result_series = get_option('clsw_result_series_settings', true);
		$clsw_preview_series = get_option('clsw_preview_series_settings', true);?>
		<div><input value="Yes" type="checkbox" name="clsw_auto_refresh_option" id="clsw_auto_refresh_option" <?php echo ($clsw_auto_refresh_option == 'Yes' ? 'checked' : '');?>>Enable auto refresh live score.
		<select name="clsw_auto_refresh_select" id="clsw_auto_refresh_select" <?php echo ($clsw_auto_refresh_option == 'Yes' ? '' : 'disabled=""');?>>
			<option value="1" <?php echo ($clsw_auto_refresh_select == 1 ? 'selected' : '');?>>1 Minute</option>
			<option value="2" <?php echo ($clsw_auto_refresh_select == 2 ? 'selected' : '');?>>2 Minutes</option>
			<option value="3" <?php echo ($clsw_auto_refresh_select == 3 ? 'selected' : '');?>>3 Minutes</option>
			<option value="4" <?php echo ($clsw_auto_refresh_select == 4 ? 'selected' : '');?>>4 Minutes</option>
			<option value="5" <?php echo ($clsw_auto_refresh_select == 5 ? 'selected' : '');?>>5 Minutes</option>
			<option value="6" <?php echo ($clsw_auto_refresh_select == 6 ? 'selected' : '');?>>6 Minutes</option>
			<option value="7" <?php echo ($clsw_auto_refresh_select == 7 ? 'selected' : '');?>>7 Minutes</option>
			<option value="8" <?php echo ($clsw_auto_refresh_select == 8 ? 'selected' : '');?>>8 Minutes</option>
			<option value="9" <?php echo ($clsw_auto_refresh_select == 9 ? 'selected' : '');?>>9 Minutes</option>
			<option value="10" <?php echo ($clsw_auto_refresh_select == 10 ? 'selected' : '');?>>10 Minutes</option>
			<!--<option value="custom" <?php //echo ($clsw_auto_refresh_select == "custom" ? 'selected' : '');?>>Custom</option>-->
		</selcet></div>
		<div><input  style="display: none;" min="1" step="1
			" type="number" name="clsw_auto_refresh_custom" id="clsw_auto_refresh_custom" value="<?php //echo ($clsw_auto_refresh_custom ? $clsw_auto_refresh_custom : '');?>" disabled=""></div>
		<div><input value="Yes" type="checkbox" name="clsw_display_results" <?php echo ($clsw_results == 'Yes' ? 'checked' : '');?>>Display recent matches result with live scores.</div>
		<div><input value="Yes" type="checkbox" name="clsw_score_series_name" <?php echo ($clsw_score_series == 'Yes' ? 'checked' : '');?>>Display series name with live scores.</div>
		<div><input value="Yes" type="checkbox" name="clsw_result_series_name" <?php echo ($clsw_result_series == 'Yes' ? 'checked' : '');?>>Display series name with recent results.</div>
		<div><input value="Yes" type="checkbox" name="clsw_preview_series_name" <?php echo ($clsw_preview_series == 'Yes' ? 'checked' : '');?>>Display upcoming match details with live scores.</div>
		<div><input type="submit" name="clsw_save_settings" value="Submit"></div>
	</form>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		$('#clsw_auto_refresh_option').click(function() {
			if($('#clsw_auto_refresh_option').is(':checked')){
		    	//$("#clsw_auto_refresh_select").toggle(this.checked);
		    	$("#clsw_auto_refresh_select").prop('disabled', false);
		    }else{
		    	$("#clsw_auto_refresh_select").prop('disabled', true);
		    	//$("#clsw_auto_refresh_custom").prop('disabled', true);
		    }
		});
	});
	</script>
</div>