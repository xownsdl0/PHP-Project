<?php
    $username = $_POST["username"];
    $id   = $_POST["id"];
    $email = $_POST["email"];
    $name = $_POST["password"];
    $pass  = $_POST["password2"];
    $regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

    $con = mysqli_connect("localhost", "root", "password::", "register");

	$sql = "insert into members(id, pass, name, email, regist_day) values('$id', '$pass', '$name', '$email', '$regist_day')";

	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행
  mysqli_close($con);     

  echo "
      <script>
          location.href = '../index.php';
      </script>
  ";
?>

