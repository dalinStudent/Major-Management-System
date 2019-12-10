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
    
?>
