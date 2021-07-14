<div class="container" style="margin-top: 2em; margin-bottom: 2em;">

    <h1 class="page-title"><?php echo $title; ?></h1>
    <p class="text-success"><?php echo $success; ?></p>
    <p class="text-danger"><?php echo $error; ?></p>
    
    <?php if(count($header_images)>0):  ?>
        <a href="#add-new-image-modal" class="btn btn-success modal-trigger" data-toggle="modal" data-target="#add-new-image-modal">Add New Image</a><br><br>

    <div class="row">
        <?php foreach($header_images as $hi): ?>
        <div class="col-lg-3 col-md-6 col-sm-12 text-center">
            <img src="<?php echo site_url("assets/images/".$hi["name"]); ?>" class="w-100"><br><br>
            <form action="<?php echo site_url("delete-header-image-exe"); ?>" method="POST" class="d-inline">
                <input type="hidden" name="hi-id" value="<?php echo $hi["id"]; ?>">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
        <?php endforeach; ?>
    </div>
    <?php else: ?>
        <p class="message">Header Images not found</p>
        <a href="#add-new-image-modal" class="btn btn-success"  data-toggle="modal" data-target="#add-new-image-modal">Add New Image</a>
    <?php endif; ?>

    <div class="modal fade" id="add-new-image-modal" tabindex="-1" aria-labelledby="add-new-image-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add-new-image-modalLabel">Add New Header Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo site_url("add-new-header-image-exe"); ?>" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label for="headerImgLink">Header Image Link</label>
                            <input type="text" value="#" name="headerImgLink" class="form-control" id="headerImgLink">
                        </div>
                        <div class="form-group"><input type="file" name="header-image" accept="image/*" id="" ></div>
                        <button type="submit" class="btn btn-success">Add New Header Image</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>