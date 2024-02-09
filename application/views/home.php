
<?php
echo lang('example') . "<br>";
if(!$this->ion_auth->logged_in()){
//return redirect()->to('/auth/login');
	echo "view home: not logged in!";
}
else{?>
	view home: logged in!<br>
	<a href="auth/logout" class="btn btn-primary">Logout</a>
<?php }
?>