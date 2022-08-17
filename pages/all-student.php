<?php include 'pages/header.php';?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h4 class="text-center">All Student Information</h4></div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Student Image</th>
                                <th>Student Email</th>
                                <th>Student Mobile</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($students as $student) { ?>
                            <tr>
                                <td><?php echo $student['name']; ?></td>
                                <td>
                                    <img src="<?php echo $student['image']; ?>" alt="" height="50" width="80">
                                </td>
                                <td><?php echo $student['email']; ?></td>
                                <td><?php echo $student['mobile']; ?></td>
                                <td>
                                    <a href="action.php?page=edit&&id=<?php echo $student['id']?>" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'pages/footer.php';?>