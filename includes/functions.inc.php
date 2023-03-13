<?php
function emptyInputContact($uid, $prod_Title, $prod_Description) {
    $result;
    if (empty($prod_Title) || empty($prod_Description)) {
        $result = true;     
    }
    else {
        $result = false;
    }
    return $result;
}
// Post een nieuw product in de database
function createProduct($conn, $prod_Title, $prod_Description) {
    $sql = "INSERT INTO postproduct ( prod_Title, prod_Description) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn); 
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: postproduct.php?error=stmtfailed");
        exit(); 
    }
    
    mysqli_stmt_bind_param($stmt, "sss", $uid, $prod_Title, $prod_Description);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: postproduct.php?error=none");
    exit();
}
?>