<?php
include "../config/connection.php";
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM t_todos where id = $id";
      $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ubah data</title>
</head>
<body>
<fieldset>
      <legend>Input todo</legend>
        <form action="update.php" method="post">
        <table>
          <tr>
            <td>Task</td>
            <td>:</td>
            <td><input type="text" name="todo" id="todo" value="<?= $row['todo']; ?>"></td>
          </tr>
          <tr>
            <td>Dimulai</td>
            <td>:</td>
            <td><input type="date" name="startdate" id="startdate" value="<?= $row['start_date']; ?>"></td>
          </tr>
          <tr>
            <td>Selesai</td>
            <td>:</td>
            <td><input type="date" name="enddate" id="enddate" value="<?= $row['end_date']; ?>"></td>
          </tr>
          <tr>
            <td>Complete?</td>
            <td></td>
            <td><input type="checkbox" name="completed" id="completed"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" value="proses" name="proses"></td>
          </tr>
          <input type="text" name="id" id="id" value="<?= $row['id']; ?>">
        </table>
        </form>
    </fieldset>
</body>
</html>