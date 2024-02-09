<?php 
//echo $this->lang->load('ion_auth');


?>
<h3>Welcome, <?php echo $user->first_name.' '.$user->last_name; ?>!<br><?php echo lang("login_successful")?></h3>

<a href="auth/logout" class="btn btn-primary">Logout</a>