<section class="vh-100">
  <div class="container h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5 mt-5">
        <img src="<?php echo base_url('assets/img/kucing1.jpg') ?>"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form method="post" action="<?php echo base_url('auth/login'); ?>">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start mb-5">
            <p class="lead fw-normal mb-0 me-3">Sign in</p>
          </div>


          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" id="inputEmail" class="form-control form-control-lg"
              placeholder="Enter a valid email address" name="email" />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-3">
            <input type="password" id="inputPassword" class="form-control form-control-lg"
              placeholder="Enter password" name="password"/>
            <label class="form-label" for="form3Example4">Password</label>
          </div>


          <div class="text-center text-lg-start mt-4 pt-2">
            <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="<?php echo base_url('auth/registrasi'); ?>"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
