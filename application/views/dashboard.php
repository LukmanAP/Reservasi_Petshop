<div class="container">

<div class="text-center my-5 p-4 rounded">
    <?php if ($this->session->userdata('name')) : ?>
        <h3 class="text-primary">👋 Halo, <?= htmlspecialchars($this->session->userdata('name')) ?>!</h3>
        <p class="text-muted">Senang bertemu denganmu lagi</p>
    <?php else : ?>
        <h3 class="text-primary">👋 Selamat Datang!</h3>
        <p class="text-muted">Silakan login untuk mulai</p>
    <?php endif; ?>
</div>

<div class="row justify-content-center">
        <!-- Grooming Card -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="<?php echo base_url().'assets/home/Grooming.jpg' ?>" class="card-img-top" alt="Grooming">
                <div class="card-body text-center">
                    <h5 class="card-title">Grooming</h5>
                    
                    <a href="<?php echo site_url('dashboard/grooming'); ?>" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>

        <!-- Pet Hotel Card -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="<?php echo base_url().'assets/home/hotel.jpg' ?>" class="card-img-top" alt="Pet Hotel">
                <div class="card-body text-center">
                    <h5 class="card-title">Pet Hotel</h5>
                
                    <a href="<?php echo site_url('pethotel/form_pethotel/form/'.$this->session->userdata('user_id')); ?>" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
