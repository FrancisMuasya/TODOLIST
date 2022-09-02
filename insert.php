<?php
  include 'config.php';

  $txt = $_POST['txt'];

  $sql = "INSERT INTO todo (txt) VALUES ('$txt')";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo 1;
  }else {
    echo "Error: {$sql}" . mysqli_error($conn);
  }
?>
