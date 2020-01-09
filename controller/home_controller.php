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
        $data['page'] = "test/view";
    }
    
    function home(&$data) {
        $data['home'] = m_home();
        $data['page'] = "pages/home";
    }
    function go_homePage(&$data) {
        session_start();
        $data['user'] = getUser($_POST);
        foreach ($data['user'] as $key => $value) {
            if($value['passwords'] == $_SESSION['password'] && $value['username'] = $_SESSION['username']) {
                $data['dashborad'] = m_view();
                $data['page'] = "pages/home";
        }else {
            $data['page'] = "test/view";
        }
    }
}
    
?>