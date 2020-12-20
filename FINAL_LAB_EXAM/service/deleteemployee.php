  
<?php

require_once('../db/db.php');
 $conn = getConnection();
 
 function deleteUser($funame){
     global $conn;
     $sql = "delete from users where username ='$funame'";
     mysqli_query($conn, $sql);
     header('location: ../view/login.php?msg=user_deleted');
 }

?>