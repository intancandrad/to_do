<?php
include "../config/connection.php";
  if(isset($_POST['proses'])){
    $id = $_POST['id'];
    $todo = $_POST['todo'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $completed = $_POST['completed'];
    $completed == null ? $completed = 0 : $completed = 1;
      $query = "UPDATE t_todos SET todo = '$todo', start_date = '$startdate', end_date = '$enddate', completed = '$completed' WHERE id = $id";
        $result = mysqli_query($conn, $query);
         if($result){
            echo "<script>alert('Data berhasil diubah'); window.location = 'dasbor.php';</script>";
         }
  }
?>