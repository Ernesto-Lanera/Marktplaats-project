<?php
$sname = "20.224.252.175";
$unmae = "marktplaats4b";
$password = "password";
$db_name = "marktplaats";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";}
session_start();

if (isset($_POST['user_name']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['user_name']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM accounts WHERE user_name='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user_name'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: ../home.php");

                exit();

            }else{

                header("Location: welcome.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: welcome.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: ../home.php");

    exit();

}
?>