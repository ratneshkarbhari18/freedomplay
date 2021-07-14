<main class="page-content" id="admin-login">

    <div class="container" style="margin-top: 5em;">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12"></div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <h1 class="page-title text-center">Admin Login</h1>
                <p class="text-danger text-center"><?php echo $error; ?></p>
                <form action="<?php echo site_url("admin-login-exe") ?>" method="post">
                    <div class="form-group">
                        <label for="admin_username">Username</label>
                        <input class="form-control" type="text" name="admin_username" id="admin_username">
                    </div>
                    <div class="form-group">
                        <label for="admin_password">Password</label>
                        <input class="form-control" type="password" name="admin_password" id="admin_password">
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Login</button>
                </form>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12"></div>
        </div>
    </div>

</main>