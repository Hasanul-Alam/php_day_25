<?php include 'header.php'?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Choose your favourite number and hit submit.</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Your Numbers: </label>
                                <div class="col-md-9">
                                    <?php foreach ($numbers as $number) { ?>
                                        <label for=""><input type="checkbox" class="" name="number[]"> <?php echo $number['num']; ?></label>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Summation</label>
                                <div class="col-md-9">
                                    <textarea name="" id="" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success px-4" value="Submit" name="random_btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'?>
