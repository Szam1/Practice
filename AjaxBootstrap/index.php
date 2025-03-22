<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./vendor/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
        include './modal.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Ajax And bootstrap</h4>
                            <!-- Button trigger modal -->
                        <button type="button" id="btnAddUser" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUser">
                            Launch
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table" id="myTable" >
                            <table class="table table-striped-columns">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Course</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $conn = mysqli_connect("localhost", "root", "", "blog");
                                        $query = "SELECT * FROM students";
                                        $result = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($result) > 0){
                                            foreach($result as $data){
                                                ?>
                                                    <tr>
                                                        <td><?php echo $data['id']?></td>
                                                        <td><?php echo $data['name']?></td>
                                                        <td><?php echo $data['email']?></td>
                                                        <td><?php echo $data['phone']?></td>
                                                        <td><?php echo $data['course']?></td>
                                                    </tr>
                                                <?php
                                            }
                                        }
                                    ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <!-- Add User Modal -->
    <script src="./vendor/jquery.min.js"></script>
    <script src="./vendor/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    <script src="./script.js"></script>
</body>
</html>