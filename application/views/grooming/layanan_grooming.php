
<div class="container">

	<div class="row d-flex justify-content-center text-center mt-3">
		<?php foreach ($grooming as $grm) : ?>
			
			<div class=" col-6 card mx-2 mt-3" style="width:18rem" href="" > 
			<a href="<?php echo site_url('dashboard/detail_grooming/'.$grm->id_grooming); ?>" class="text-decoration-none text-dark">
				<img src="<?php echo base_url().'/assets/img/'.$grm->image ?>" alt="" class="card-img-top">
				<div class="card-body">
					
					<h5 class="card-title mb-1"><?php echo $grm->name ?></h5>
					<small><?php echo $grm->description?></small><br>
					<span class="badge text-bg-success mb-3">Rp.<?php echo $grm->price?></span><br>
				</div>
				</a>
			</div>
			
		<?php endforeach; ?>	
	</div>
</div>

