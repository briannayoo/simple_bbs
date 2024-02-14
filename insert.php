<?php
  require_once('config.php');
  $username = $_POST['username'];
  $usermsg = $_POST['usermsg'];

  $sql = "INSERT INTO simplebbs (username,usermsg) VALUES('$username','$usermsg')";

  $result = mysqli_query($mysqli, $sql);

  if($result == false){
    echo "<script>alert('저장 실패');history.back();</script>";
   
  }else{
    echo "<script>alert('저장 성공');location.href='./index.php;</script>";

  }
?>