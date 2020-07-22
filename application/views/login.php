<!DOCTYPE html>
<html lang="en">
    <head>
		<?php $this->load->view("_Partials/Header.php") ?>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="<?= base_url('login/dologin') ?>" method="POST">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email or Username</label>
                                                <input class="form-control py-4" id="inputEmailAddress" name="inputEmailAddress" type="text" placeholder="Enter Username or email address" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="inputPassword" name="inputPassword" type="password" placeholder="Enter password" />
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
												<input type="submit" class="btn btn-success w-100" value="Login" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
					<?php $this->load->view("_Partials/Footer.php") ?>
                </footer>
            </div>
        </div>
        <?php $this->load->view("_Partials/Js.php") ?>
    </body>
</html>
