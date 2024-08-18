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
                                    <input type="text" class="form-control form-control-user mb-3" id="exampleInputEmail"
                                        placeholder="Masukan nama anda" name="name">
									
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user mb-3" id="exampleInputEmail"
                                        placeholder="Masukan email anda" name="email">
										
                                </div>
								<div class="form-group">
                                    <input type="text" class="form-control form-control-user mb-3" id="exampleInputEmail"
                                        placeholder="Masukan nomor telepon anda" name="phone">
										
                                </div>
								<div class="form-group">
                                    <input type="text" class="form-control form-control-user mb-3" id="exampleInputEmail"
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
