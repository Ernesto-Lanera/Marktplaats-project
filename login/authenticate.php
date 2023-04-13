<?php
//info connectie database
$sname = "20.224.252.175";
$unmae = "marktplaats4b";
$password = "password";
$db_name = "marktplaats";
//connectie maken met database
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
//als hij niet goed connect
    echo "Connection failed!";}
session_start();
//als je al ingellogd bent
if(isset($_SESSION['login']) && $_SESSION['login'] === true){
    header("location: home.php");
    exit;
}
//als gebruikersnaam en wachtwoord worden opgestuurd kijken of ze kloppen
if (isset($_POST['user_name']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['user_name']);

    $pass = validate($_POST['password']);
// als iets niet is ingevuld
    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }
    //zorgt voor dat je inlogt
    else{

        $sql = "SELECT * FROM accounts WHERE user_name='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            
            if($result)
            {
                
                $_SESSION["login"]="1";
                header("location:../home.php");
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

    

    exit();

} 

?>