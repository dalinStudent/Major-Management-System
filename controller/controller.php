<?php
    $data = array();
    flexible_function($data);
    function flexible_function(&$data) {
        $function = "view";
        if(isset($_GET['action'])) {
            $action = $_GET['action'];
            $function = $action;
        }
        $function($data);
    }
    
    function view(&$data) {
        $data['view'] = m_view();
        $data['page'] = "test/view.php";

    }
    function home(&$data) {
        $data['home'] = m_home();
        $data['page'] = "pages/home.php";
    }
?>