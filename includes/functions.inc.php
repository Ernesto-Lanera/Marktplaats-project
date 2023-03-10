<?php
function emptyInputContact($uid, $title, $description) {
    $result;
    if (empty($title) || empty($description)) {
        $result = true;     
    }
    else {
        $result = false;
    }
    return $result;
}
// Post een nieuw product in de database
function createProduct($conn, $title, $description) {
    $sql = "INSERT INTO postproduct ( title, description) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn); 
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: postproduct.php?error=stmtfailed");
        exit(); 
    }
    
    mysqli_stmt_bind_param($stmt, "sss", $uid, $title, $description);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: postproduct.php?error=none");
    exit();
}
?>