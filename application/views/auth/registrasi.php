<!DOCTYPE html>
<html lang="en">

<body class="bg-secondary-emphasis">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar Akun</h1>
                            </div>
                            <form method="post" class="user" action="<?php echo base_url('auth/registrasi'); ?>">
							<div class="form-group">
                                    <input type="text" class="form-control form-control-user mb-3"
                                        placeholder="Masukan nama anda" name="name">
									
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user mb-3"
                                        placeholder="Masukan email anda" name="email">
										
                                </div>
								
								<div class="form-group">
									<div class="input-group mb-3">
										<span class="input-group-text">+62</span>
										<input type="tel" class="form-control form-control-user" 
											placeholder="Masukkan nomor telepon" 
											name="phone" 
											pattern="^8[1-9][0-9]{7,10}$" 
											title="Masukkan nomor handphone Indonesia yang valid (contoh: 822 xxxx xxxx)"
											required
											>
									</div>
								<div class="invalid-feedback">Harap masukkan nomor handphone Indonesia yang valid (contoh: 81234567890)</div>
								</div>



								<div class="form-group">
                                    <input type="text" class="form-control form-control-user mb-3"
                                        placeholder="Masukan alamat anda" name="address">
										
                                </div>
                                <div class="form-group row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password_1">
											
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repeat Password" name="password_2">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Daftar Akun</button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('auth/login') ?>">SUdah punya akun ? Silahkan Login !</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
