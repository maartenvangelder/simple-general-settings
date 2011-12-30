<?php 
	if($_POST['SimpleGeneralSettingsExists']) {

		//Form data sent
		extract($_POST);
		
		update_option('blogname', $sgsName);
		update_option('blogdescription', $sgsDescription);
?>
		<div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>
<?php
	} else {

		//Normal page display
		$sgsName			=  get_bloginfo('name');
		$sgsDescription	=  get_bloginfo('description');

	}
	
?>

<div class="wrap">
<?php    echo "<h2>" . __( 'Simple General Settings', 'simpleSettings_trdom' ) . "</h2>"; ?>

<form name="SimpleGeneralSettingsForm" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
	<input type="hidden" name="SimpleGeneralSettingsExists" value="true">
	<?php    echo "<h4>" . __( 'Simple General Settings', 'SimpleGeneralSettings_trdom' ) . "</h4>"; ?>
	<p><?php _e("Site Title: " ); ?><input type="text" name="sgsName" value="<?php echo $sgsName; ?>" /></p>
	<p><?php _e("Tagline: " ); ?><input type="text" name="sgsDescription" value="<?php echo $sgsDescription; ?>" /></p>	
	<p class="submit">
	    <input type="submit" name="Submit" value="<?php _e('Update Options', 'SimpleGeneralSettings_trdom' ) ?>" />
	</p>
</form>
</div>