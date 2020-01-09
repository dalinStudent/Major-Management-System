<?php
    function m_view() {
        include "connect.php";
        $query = mysqli_query($conn,"SELECT * FROM info_student");
        $result = [];
        if($query && mysqli_num_rows($query)) {
            foreach($query as $row) {
                $result[] = $row;
            }
        }
        return $result;
    }

    function m_home() {
        
    }

    function m_major() {
        
    }
    
    function getUser() {
        $password = $_POST['password'];
        $name = $_POST['username'];
        $_SESSION['password'] = $password;
        $_SESSION['username'] = $name;
        include 'connect.php';
        $query = mysqli_query($conn, "SELECT * FROM login");
        $result = [];
        foreach($query as $row){
            $result[] = $row;
        }
        return $result;
    }

    
?>
