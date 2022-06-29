<?php
include "connection.php";
  if(isset($_POST['proses'])){
    $todo = $_POST['todo'];
    $startp = $_POST['start'];
    $endp = $_POST['end'];
      $query = "INSERT INTO `t_todos` (`id`, `todo`, `start`, `end`, `completed`) 
                VALUES (NULL, '$todo', '$startp', '$endp', '0')";
        $result = mysqli_query($conn, $query);
         if($result){
            echo "<script>alert('Data berhasil ditambah'); window.location = 'dash.php';</script>";
         }
  }
?>