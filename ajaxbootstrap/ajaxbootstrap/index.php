<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./vendor/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
    <title>Document</title>
</head>
<body>
<?php include('modal.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h4>Hello World!</h4>
                    <!-- Button trigger modal -->
                    <button type="button" id="btnAddUser" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#saveStudent">
                        Launch
                    </button>
                </div>
                <div class="card-body">
                    <table id="myTable" class="table table-secondary table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Course</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $con = mysqli_connect("localhost", "root", "", "blog");
                                $query = "SELECT * FROM students";
                                $results = mysqli_query($con, $query);

                                if(mysqli_num_rows($results) > 0) {
                                    foreach($results as $data) { ?>
                                        <tr>
                                            <td><?php echo $data['id']; ?></td>
                                            <td><?php echo $data['name']; ?></td>
                                            <td><?php echo $data['email']; ?></td>
                                            <td><?php echo $data['phone']; ?></td>
                                            <td><?php echo $data['course']; ?></td>
                                            <td>
                                            <button value="<?php echo $data['id']; ?>" id="viewStudent" type="button" class="btn btn-primary"> <i class="fa-solid fa-eye"></i> View </button>
                                            <button value="<?php echo $data['id']; ?>" id="editStudent" type="button" class="btn btn-success"> <i class="fa-solid fa-pen-to-square"></i> Edit </button>
                                            <button value="<?php echo $data['id']; ?>" id="deletestudent" type="button" class="btn btn-danger"> <i class="fa-solid fa-trash"></i> Delete </button>
                                            <button value="<?php echo $data['id']; ?>" id="uploadImageStudent" type="button" class="btn btn-primary"> <i class="fa-solid fa-cloud-arrow-up"></i> Upload </button>
                                        </td>   
                                        </tr>
                                    <?php }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./vendor/bootstrap.bundle.min.js"></script>
<script src="./vendor/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="./vendor/dataTables.js"></script>
<script src="./vendor/dataTables.bootstrap5.js"></script>
<script src="./script.js"></script>
</body>
</html>
