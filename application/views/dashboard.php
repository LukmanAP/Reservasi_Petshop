<div class="container">

	<div class="text-center my-5">
		<?php if ($this->session->userdata('name')) { ?>
			<div><h2>Selamat Datang, <?php echo $this->session->userdata('name'); ?></h2></div>
		<?php } else { ?>
			<h2>Selamat Datang!</h2>
		<?php } ?>

        
    </div>

<div class="row justify-content-center">
        <!-- Grooming Card -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/500x300?text=Grooming" class="card-img-top" alt="Grooming">
                <div class="card-body text-center">
                    <h5 class="card-title">Grooming</h5>
                    
                    <a href="<?php echo site_url('dashboard/grooming'); ?>" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Pet Hotel Card -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/500x300?text=Pet+Hotel" class="card-img-top" alt="Pet Hotel">
                <div class="card-body text-center">
                    <h5 class="card-title">Pet Hotel</h5>
                
                    <a href="<?php echo site_url('services/pet_hotel'); ?>" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>