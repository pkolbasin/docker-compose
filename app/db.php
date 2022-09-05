
<?php
session_start();

$conn = mysqli_connect(
  '10.10.0.200',
  'root',
  'sicretpasswd',
  'crud_db'
) or die(mysqli_erro($mysqli));

?>