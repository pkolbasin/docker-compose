
<?php
session_start();

$conn = mysqli_connect(
  '192.168.0.200',
  'root',
  'sicretpasswd',
  'crud_db'
) or die(mysqli_erro($mysqli));

?>