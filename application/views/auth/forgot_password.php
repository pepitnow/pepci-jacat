<style>
	.alert{display:block}
	.navbar-toggle{display:none}
</style>
<?php echo $form->open(); ?>

	<div id="infoMessage">
		<?php echo $form->messages(); ?>		
	</div>
	</br>
	
	<?php echo $form->bs3_email('Email'); ?>
	</br>
	<?php echo $form->bs3_submit('Submit'); ?>

<?php echo $form->close(); ?>