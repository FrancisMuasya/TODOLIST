<?php
  include 'config.php';

  $sql = "SELECT * FROM todo";
  $result = mysqli_query($conn, $sql);

  $count = mysqli_num_rows($result);
?>

Pending Tasks <span><?php echo $count; ?></span>
