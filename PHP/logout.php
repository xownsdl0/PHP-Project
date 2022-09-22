<?php
  session_start();
  unset($_SESSION["userid"]);
  unset($_SESSION["username"]);
  unset($_SESSION["userlevel"]);
  unset($_SESSION["userpoint"]);
  
  echo("
       <script>
          window.alert('로그아웃 되었습니다.')
          location.href = '../index.php';
         </script>
       ");
?>
