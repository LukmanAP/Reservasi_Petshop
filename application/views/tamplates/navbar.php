<div class="container-fluid">
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php echo site_url('dashboard/index'); ?>">
			<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-shop-window mb-2" viewBox="0 0 16 16">
  				<path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5m2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5"/>
			</svg>  Dava<b>Petshop</b></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<?php if($this->session->userdata('name')) {?>
				<li class="nav-item">
					<a class="nav-link"  href="<?php  echo site_url('cat/mycat/'.$this->session->userdata('user_id')); ?>">MyCat</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Reservasi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Hotel</a>
				</li>
			<?php } else {}?>
		</ul>
		
		</div>
		<ul class="nav navbar-nav navbar-right">
			<?php if ($this->session->userdata('name')) { ?>
				<li><div><?php echo $this->session->userdata('name') ?>-</div> </li>
				<li class="ml-2"><?php echo anchor('auth/logout','logout'); ?></li>
			<?php } else {?>
				<li><?php echo anchor('auth/login', 'login'); ?></li>

			<?php } ?>
		</ul>	
	</div>
	</nav>
</div>
