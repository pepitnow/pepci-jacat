<style>
	.alert{display:block}
	.navbar-toggle{display:none}
</style>
<?php echo $form->open(); ?>

	<div id="infoMessage">
		<?php echo $form->messages(); ?>		
	</div>
	</br>
	
	<?php
	
	//  echo $form->bs3_email('Email'); 
	echo $form->bs3_text($this->lang->language["login_identity_label"], 'username');
		//echo 

	echo "</br>";
	echo $form->bs3_password($this->lang->language["login_password_label"]); 
	/*
	<!-- <div class="checkbox">
		<label>
			<input type="checkbox" name="remember"> Remember me
		</label>
	</div> -->
	<!-- <div class="form-group">
		Don't have Account? <a href="auth/sign_up">Sign Up</a>
	</div> -->
	*/
	?>
	<div class="form-group">
		<a href="auth/forgot_password">Forgot password?</a>
	</div>
	<br>
	<?php echo $form->bs3_submit($this->lang->language["login_submit_btn"]); ?>

<?php echo $form->close(); ?>