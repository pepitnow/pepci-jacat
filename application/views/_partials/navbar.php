<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container">

	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href=""><?php echo $site_name; ?></a>
	</div>

	<div class="navbar-collapse collapse">

		<ul class="nav navbar-nav">
		<?php $authenticated = $this->ion_auth->logged_in();?>
			<?php foreach ($menu as $parent => $parent_params): ?>
			  <?php
			  if (array_key_exists('access', $parent_params) and ((!$authenticated and ($parent_params['access']=='authenticated')) or ($authenticated and ($parent_params['access']=='unauthenticated')))) continue;
			  ?>
				<?php if (empty($parent_params['children'])): ?>

					<?php $active = ($current_uri==$parent_params['url'] || $ctrler==$parent); ?>
					<li <?php if ($active) echo 'class="active"'; ?>>
						<a href='<?php echo $parent_params['url']; ?>'>
							<?php echo $parent_params['name']; ?>
						</a>
					</li>

				<?php else: ?>

					<?php $parent_active = ($ctrler==$parent); ?>
					<li class='dropdown <?php if ($parent_active) echo 'active'; ?>'>
						<a data-toggle='dropdown' class='dropdown-toggle' href='#'>
							<?php echo $parent_params['name']; ?> <span class='caret'></span>
						</a>
						<ul role='menu' class='dropdown-menu'>
							<?php foreach ($parent_params['children'] as $name => $url): ?>
								<li><a href='<?php echo $url; ?>'><?php echo $name; ?></a></li>
							<?php endforeach; ?>
						</ul>
					</li>

				<?php endif; ?>

			<?php endforeach; ?>
		</ul>

		<?php //if ( !empty($available_languages) ): ?>
			<ul class="nav navbar-nav navbar-right">
				<?php 
				if ($this->ion_auth->logged_in()){ ?>
				<li class="dropdown">
					<a data-toggle='dropdown' class='dropdown-toggle' href='#'>
						<i class="fa fa-user"><?php echo " ".$this->ion_auth->user()->row()->email; ?></i>
						<span class='caret'></span>
					</a>
					<ul role='menu' class='dropdown-menu'>
						<li><a href="auth/logout"><?php echo $this->lang->language["logout"];?></a></li>
					</ul>
				</li>
				<?php }
				else{ ?>
				<!-- <li>
					<a href="">Login</a>
				</li> -->
				<?php } ?>
				<?php if ( !empty($available_languages) ): ?>
				<li class="dropdown">
					<a data-toggle='dropdown' class='dropdown-toggle' href='#'>
						<i class="fa fa-language"><?php echo " ".$available_languages[$language]['label']; ?></i>
						<span class='caret'></span>
					</a>
					<ul role='menu' class='dropdown-menu'>
						<?php foreach ($available_languages as $abbr => $item): ?>
						<li><a href="language/set/<?php echo $abbr; ?>"><?php echo $item['label']; ?></a></li>
						<?php endforeach; ?>
					</ul>
				</li>
				<?php endif; ?>
			</ul>
		<?php //endif; ?>
		
	</div>

</div>
</nav>