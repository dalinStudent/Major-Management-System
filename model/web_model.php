<?php
    function get_data(){
        $query = "SELECT * FROM tbl_web";
        include "connect.php";
        $rows = [];
        $result = mysqli_query($conn,$query);
        if($result && mysqli_num_rows($result)>0){
            foreach($result as $record){
                $rows[] = $record;
            }
        }
        return $rows;
    }

    function add_data($data) {
        include "connect.php";
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $class = $_POST['class'];
        $sex = $_POST['sex'];
        $email = $_POST ['email'];
        $reason = $_POST['reason'];
        $major = $_POST['major'];
        $filename = $_FILES['profile']['name'];
        $fileLocation = $_FILES['profile']['tmp_name'];
        move_uploaded_file($fileLocation, "views/mg/".$filename);
    
        $query = "INSERT INTO tbl_web(first_name ,last_name, gender, class, email, major, reason, profile)
                  VALUES('$firstname', '$lastname', '$sex', '$class', '$email','$major','$reason', '$filename')";
        $result = mysqli_query($conn, $query);
        return $result;
    }

    function m_detail() {
        $id = $_GET['id'];
        $query =  "SELECT * FROM tbl_web WHERE id = $id";
        include "connect.php";
        $result = mysqli_query($conn,$query);
        return $result;
    }
    

    function m_update_data($data) {
        include "connect.php";
        $id = $_GET['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $class = $_POST['class'];
        $sex = $_POST['sex'];
        $email = $_POST ['email'];
        $reason = $_POST['reason'];
        $major = $_POST['major'];
    
        $query = "UPDATE tbl_web SET  first_name='$firstname',last_name='$lastname',class = '$class',gender='$sex',email='$email',reason='$reason',major='$major' WHERE id='$id'";
    
        $result = mysqli_query($conn, $query);
        return $result;
    }
    
    function m_change_profile($data) {
        include "connect.php";
        $id = $_GET['id'];
        $filename = $_FILES['profile']['name'];
        $fileLocation = $_FILES['profile']['tmp_name'];
        move_uploaded_file($fileLocation, "views/img/".$filename);
    
        $query = "UPDATE tbl_web SET profile = '$filename' WHERE id='$id'";
    
        $result = mysqli_query($conn, $query);
        return $result;
    
    }

    function m_delete() {
        include "connect.php";
        $id = $_GET['id'];
        $result = mysqli_query($conn, "DELETE FROM tbl_web WHERE id= $id");
    
        return $result;
    }
    
    
?>