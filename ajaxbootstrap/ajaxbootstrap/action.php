<?php
$con = mysqli_connect("localhost","root","","blog");

if(!$con){
    die('connection failed'. mysqli_connect_error());
}
if(isset($_POST['save_student']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $course = mysqli_real_escape_string($con,$_POST['course']);

    if($email == NULL || $name == NULL || $phone == NULL || $course == NULL){
        $res = [
            'status' => 422,
            'message' => 'All field are mandatory.'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO students (email, name, phone, course)
    VALUES ('$email','$name','$phone','$course')";

    $results = mysqli_query($con, $query);

    if($results){
        $res = [
            'status' => 200,
            'message' => 'Success.'
        ];
        echo json_encode($res);
        return;
    }

    else{
        $res = [
            'status' => 500,
            
        ];
        echo json_encode($res);
        return;
    }

}

if(isset($_GET['student_id'])){
    $student_id = mysqli_real_escape_string($con,$_GET['student_id']);
    $query = "SELECT * FROM `students` WHERE id = '$student_id'";

    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result) == 1){
        $studentData = mysqli_fetch_assoc($result);

        $res = [
            'status' => 200,
            'message' => 'success data',
            'data' => $studentData
        ];

        echo json_encode($res);
        return;
    }
    else{
        $res = [
            'status' => 500,
            
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['update_student'])){
    $student_id = mysqli_real_escape_string($con,$_POST['student_id_input']);

    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $course = mysqli_real_escape_string($con,$_POST['course']);


    if($name == NULL|| $email == NULL || $phone == NULL || $phone == NULL){
        $res = [
            'status' => 422,
            'message' => 'All field are mandatory.'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE students SET name ='$name', email='$email', phone = '$phone', course = '$course'
                WHERE id = '$student_id'";

    $result = mysqli_query($con, $query);

    if($result){
        $res = [
            'status' => 200,
            'message' => 'update successfully'
        ];
        echo json_encode($res);
        return;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'update unsuccessfully'
        ];
        echo json_encode($res);
        return;
    }
                
}

if(isset($_POST['delete_student'])){
    $student_id = mysqli_real_escape_string($con,$_POST['student_id']);

    $query = "DELETE FROM students WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run){
        $res = [
            'status' => 200,
            'message' => 'Deleted successfully'
        ];
        echo json_encode($res);
        return;
    }
    else{
        $res = [
            'status' => 500,
            'message' => 'delete unsuccessfully'
        ];
        echo json_encode($res);
        return;
    }
}
?>