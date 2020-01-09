<!-- <?php
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
?> -->

<!DOCTYPE html>

<head>
    <title>MajorManagementSystem</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>
    <script src="views/js/jquery-3.4.1.js" type="text/javascript"></script>
    <script src="views/js/main.js" type="text/javascript"></script>
    <link rel="stylesheet" href="views/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
</head>
        <body style="background-image: url(https://firebasestorage.googleapis.com/v0/b/hw03-55c60.appspot.com/o/header-background.jpg?alt=media&token=a6f7e3ef-8544-443a-bfbe-07a41e885a3e);">
    
    <?php
        include "views/" . $data['page'] . ".php";
    ?> 
</body>
</html>
