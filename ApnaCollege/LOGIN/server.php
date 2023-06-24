<?php 
include_once "../Connect/connection.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: login.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: login.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);
                echo "Logged in!";
                header("Location: ../ManPortal.php");
                exit();

        }else{

            header("Location: login.php?error=Incorect User name or password");

            exit();

        }

    }
}else{

    header("Location: login.php");

    exit();

}