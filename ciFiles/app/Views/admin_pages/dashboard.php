<div class="container" style="margin-top: 2em; margin-bottom: 2em;">
    
    <h1 class="page-title" style="margin-bottom: 1em;">Welcome <?php echo $_SESSION["first_name"]; ?></h1>

    <div class="row">

        <div class="col-lg-4 col-md-12 col-sm-12">

            <a href="<?php echo site_url("home-page-mgt"); ?>">
                <div class="card">
                    <div class="card-body text-center">
                        Home Page Mgt.
                    </div>
                </div>
            </a>
        
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">

            <a href="<?php echo site_url("about-page-mgt"); ?>">
                <div class="card">
                    <div class="card-body text-center">
                        About Page Mgt.
                    </div>
                </div>
            </a>

        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">

            <a href="<?php echo site_url("contact-page-mgt"); ?>">
                <div class="card">
                    <div class="card-body text-center">
                        Contact Page Mgt.
                    </div>
                </div>
            </a>

        </div>
    
    </div>

</div>