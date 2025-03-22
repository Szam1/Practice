<?php
$conn = mysqli_connect("localhost", "root", "", "blog");
if(!$conn){
    die('connection failed!'. mysqli_connect_error());
}
    if(isset($_POST['save_student'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $course = mysqli_real_escape_string($conn, $_POST['course']);
        
        if($email == NULL || $name == NULL || $phone == NULL || $course == NULL){
            $res = [
                'status' => 422,
                'message' => 'All fields are mandatory.'
            ];
            echo json_encode($res);
            return;
        }
        $query = "INSERT INTO students (email, name, phone, course) VALUES('$email', '$name', '$phone', '$course')";

        $result = mysqli_query($conn, $query);
        if($result){
            $res = [
                'status' => 200,
                'message' => 'HAHAHAHA SUCCESS!!!!'
            ];
            echo json_encode($res);
            return;
        }else {
            $res = [
                'status' => 500,
                'message' => 'HAHAHAHA MALI!!!!'
            ];
            echo json_encode($res);
            return;
        }
    }

?>