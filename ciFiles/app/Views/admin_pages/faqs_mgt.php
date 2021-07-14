<div class="container" style="margin-top: 2em; margin-bottom: 2em;">

    <h1 class="page-title"><?php echo $title; ?></h1>
    <p class="text-success"><?php echo $success; ?></p>
    <p class="text-danger"><?php echo $error; ?></p>
    
    <?php if(count($faqs)>0):  ?>
        <a href="#add-new-image-modal" class="btn btn-success modal-trigger" data-toggle="modal" data-target="#add-new-image-modal">Add New Image</a>

    <div class="row">
        <?php foreach($faqs as $faq): ?>
        <div class="col-lg-3 col-md-6 col-sm-12 text-left">
            <p>Question: <?php echo $faq["question"]; ?></p>
            <p>Answer: <?php echo $faq["answer"]; ?></p>
            
            <form action="<?php echo site_url("delete-faq-exe"); ?>" method="POST" class="d-inline">
                <input type="hidden" name="faq-id" value="<?php echo $faq["id"]; ?>">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
        <?php endforeach; ?>
    </div>
    <?php else: ?>
        <p class="message">FAQ not found</p>
        <a href="#add-new-image-modal" class="btn btn-success"  data-toggle="modal" data-target="#add-new-image-modal">Add New FAQ</a>
    <?php endif; ?>

    <div class="modal fade" id="add-new-image-modal" tabindex="-1" aria-labelledby="add-new-image-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add-new-image-modalLabel">Add New FAQ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo site_url("add-new-faq-exe"); ?>" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label for="question">Question</label>
                            <input type="text" name="question" class="form-control" id="question">
                        </div>
                        <div class="form-group">
                            <label for="answer">Answer</label>
                            <input type="text" name="answer" class="form-control" id="answer">
                        </div>
                        <button type="submit" class="btn btn-success">Add New FAQ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>