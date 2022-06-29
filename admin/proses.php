<?php
include "connection.php";
session_start();
if(isset($_POST['login'])){
  $uname = $_POST['uname'];
  $upass = md5($_POST['upass']);
   $query = "SELECT * FROM m_admin WHERE username='$uname' AND password='$upass'";
    $result = mysqli_query($conn, $query);

      $row = mysqli_num_rows($result);
       if($row != 0 ){  
          $_SESSION['admin'] = 1;
         header('Location:dash.php');

       } else {
         header('Location: login.php?wrong=1');
       }
}