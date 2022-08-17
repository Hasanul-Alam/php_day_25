<?php include 'header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <h4 class="text-center text-success my-3"><?php echo isset($message) ? $message: '';?></h4>
                    <form action="action.php" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Enter Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" required value="<?php echo $singleStudent['name']; ?>"/>
                                <input type="hidden" value="<?php echo $singleStudent['id']; ?>" name="id"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Email</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" name="email" required value="<?php echo $singleStudent['email']; ?>"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Mobile</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="mobile" required value="<?php echo $singleStudent['mobile']; ?>"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3">Image</label>
                            <div class="col-md-9">
                                <input type="file" accept="image/*" class="form-control" name="image"/>
                                <img src="<?php echo $singleStudent['image']; ?>" alt="" width="100" height="80"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-outline-success px-4" name="update_btn" value="Update"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
