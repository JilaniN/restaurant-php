<?php 

require_once ('../database.php');

  $id = $_GET['id'];
  $DelSql = "DELETE FROM `form` WHERE id=$id";

  $res = mysqli_query($conn, $DelSql);
  if ($res) {
    header("Location: guest_book.php");
  }else{
    echo "Failed to delete";
  }

 ?>