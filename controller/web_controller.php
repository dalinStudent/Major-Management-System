<?php
    $data = array();
    flexible_function($data);
    function flexible_function(&$data){
        $function = 'view_web';
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            $function = $action;
        }
        $function($data);
    }

function view_web(&$data){
    $data['student_data'] = get_data();
    $data['page'] = "pages/web/view_web";
}
  
function add(&$data) {
    $data['page'] = "pages/web/view_web";
}

function form_data(&$data){
    $add = add_data($_POST);
    if($add){
        $action = "view_web";
    } else { 
        $action = "add";
    }
    header("Location:index2.php?action=$action");
}

function detail(&$data) {
    $data['student_data'] = m_detail();
    $data['page'] = "pages/web/detail";
}

function update_profile(&$data) {
    $data['student'] = m_detail();
    $data['page'] = "pages/web/changeProfile";
}

function change_profile(&$data) {
    $change_profile = m_change_profile($_POST);
    $id = $_GET['id'];
    if($change_profile) {
        $action = "detail&id=$id";
    }else {
        $action = "edit";
    }
    header("Location: index2.php?action=$action");
}

function edit(&$data) {
    $data['student_data'] = m_detail();
    $data['page'] = "pages/web/edit";
}

function edit_data(&$data) {
    $update_data = m_update_data($_POST);
    if($update_data) {
        $action = "view_web";
    }else {
        $action = "edit";
    }
    header("Location: index2.php?action=$action");
}

function delete(&$data) {
    $result = m_delete();
    if($result) {
        $action = "view_web";
    }else {
        echo "Cannot delete this record!!!";
    }
    header("Location: index2.php?action=$action");
}
?>