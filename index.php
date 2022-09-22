<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="jquery.subwayMap-0.5.3.js"></script>
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/todo.css">
    <title>학과 커리큘럼 로드맵</title>
    <style type="text/css">
        body
        {
            font-family: Verdana;
            font-size: 8pt;
        }
    
        /* The main DIV for the map */
        .subway-map
        {
            margin: 3px;
            display: flex;
            flex:1;
            /* width: 500px;
            height:410px; */
            background-color: white;
        }
    
        /* Text labels */
        .text
        {
            text-decoration: none;
            color: black;
        }
    
        #legend
        {
            display: flex;
            left: 0;
            bottom: 0;
            float: left; 
            width: 250px;
            
        }
    
        #legend div
        {
            height: 25px;
        }
    
        #legend span
        {
            margin: 5px 5px 5px 0;
        }
        .subway-map span
        {
            margin: 5px 5px 5px 0;
        }
        a:link { color: red; text-decoration: none;}
        a:visited { color: black; text-decoration: none;}
        a:hover { color: black; text-decoration: underline;}
        </style>
</head>
<body>
    <?php
        session_start();
        if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
        else $userid = "";
        if (isset($_SESSION["username"])) $username = $_SESSION["username"];
        else $username = "";
        if (isset($_SESSION["userlevel"])) $userlevel = $_SESSION["userlevel"];
        else $userlevel = "";
        if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
        else $userpoint = "";

    
        $class1 = [];
        $class2 = [];
        $class3 = [];

        $con = mysqli_connect("localhost", "root", "password::", "class");
        $sql = "select * from class order by num";
        $result = mysqli_query($con, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)){
                if ($row['num'] == 1){
                    array_push($class1, $row['sub']);
                } else if ($row['num'] == 2) {
                    array_push($class2, $row['sub']);
                } else if ($row['num'] == 3) {
                    array_push($class3, $row['sub']);
                }
            }
        }

        $errors = "";
        $test = "";
        $post = $_POST['key'];
    
        $todo = mysqli_connect("localhost", "root", "password::", "todo");
        $hi = $_POST['hidden'];
        
        // if (!$userid) {
        //     echo "로그인 먼저 하세요."
        // } else {

        // }

        if (isset($_POST['submit'])) {
            
            if (empty($_POST['task'])) {
                $errors = "You must fill in the task";
            }else{
                $hi = $_POST['hidden'];
                $task = $_POST['task'];
                $sql = "INSERT INTO todo (sub,TASK) VALUES ('$hi', '$task')";
                mysqli_query($todo, $sql);
                
            }
            
        }

        if (isset($_POST['remove'], $_POST['task'])) {
            $id = $_POST['remove'];
            $task = $_POST['task'];
            $del = "DELETE FROM todo WHERE TASK='$id' AND sub = '$task'";
            mysqli_query($todo, $del);
            
            header('location: index.php');
        }

        if (isset($_POST['update'], $_POST['subject'], $_POST['task'])) {
            $id = $_POST['update'];
            $task = $_POST['subject'];
            $sub = $_POST['task'];
            $update = "UPDATE todo SET TASK = '$id' WHERE TASK = '$task' AND sub = '$sub'";
            mysqli_query($todo, $update);
            header('location: index.php');
        }
    ?>

    <div id="wrap" class="wrap">
        <header class="header">
            <nav class="nav">
                <div class="logo" style="font-size:14pt;"><a href="index.php">Final_exam</a></div>
                <div class="menu">
                    <?php
                        if(!$userid) {
                    ?>
                        <ul>
                            <li style="font-size:14pt; margin-right:20px"><a href="PHP/login_form.php">로그인</a></li>
                            <li style="font-size:14pt;"><a href="PHP/register.php">회원가입</a></li>
                        </ul>
                    <?php
                        } else {
                    ?>
                        <ul>
                            <li style="font-size:14pt; margin-right:20px"><?=$username?></li>
                            <li style="font-size:14pt;"><a href="PHP/logout.php">로그아웃</a></li>
                        </ul>
                    <?php
                        }
                    ?>

                </div>
            </nav>
        </header>
        <div class="content">
            <div class="main">
                <div class="subway-map" data-columns="32" data-rows="20" data-cellSize="40" data-legendId="legend" data-textClass="text" data-gridNumbers="true" data-grid="false" data-lineWidth="8">
                    <ul data-color="rgba(241,207,208)" data-label="class1" id='test'>
                        <li data-coords="4,16" id="sub[]"><?=$class1[6]?></li>
                        <li data-coords="6,16"><?=$class1[5]?></li>
                        <li data-coords="8,16"><?=$class1[0]?></li>
                        <li data-coords="10,16"><?=$class1[4]?></li>
                        <li data-coords="12,16"><?=$class1[3]?></li>
                        <li data-coords="13,16"><?=$class1[10]?></li>
                        <li data-coords="15,16"><?=$class1[12]?></li>
                        <li data-coords="16,15" data-dir="E"><?=$class1[2]?></li>
                        <li data-coords="16,14"><?=$class1[11]?></li>
                        <li data-coords="16,11"><?=$class1[1]?></li>
                        <li data-coords="16,9"><?=$class1[7]?></li>
                        <li data-coords="16,7"><?=$class1[13]?></li>
                        <li data-coords="16,5"><?=$class1[8]?></li>
                        <li data-coords="17,4"></li>
                        <li data-coords="18,4"><?=$class1[14]?></li>
                        <li data-coords="20,4"><?=$class1[9]?></li>
                        <li data-coords="23,4"><?=$class1[16]?></li>
                        <li data-coords="27,4"><?=$class1[15]?></li>
                    </ul>

                    <ul data-color="rgba(188, 216, 163)" data-label="class2">
                        <li data-coords="3,4"><?=$class2[14]?></li>
                        <li data-coords="5,4"><?=$class2[8]?></li>
                        <li data-coords="6,4"></li>
                        <li data-coords="12,10"><?=$class2[7]?></li>
                        <li data-coords="14,10"><?=$class2[4]?></li>
                        <li data-coords="17,10"><?=$class2[5]?></li>
                        <li data-coords="19,10"><?=$class2[6]?></li>
                        <li data-coords="25,16"></li>
                        <li data-coords="26,16"><?=$class2[9]?></li>
                        <li data-coords="28,16"><?=$class2[10]?></li>
                    </ul>

                    <ul>
                        <li data-coords="7,5"><?=$class2[2]?></li>
                    </ul>

                    <ul>
                        <li data-coords="9,7"><?=$class2[0]?></li>
                    </ul>

                    <ul>
                        <li data-coords="10,8"><?=$class2[3]?></li>
                    </ul>

                    <ul>
                        <li data-coords="20,11"><?=$class2[13]?></li>
                    </ul>

                    <ul>
                        <li data-coords="21,12"><?=$class2[12]?></li>
                    </ul>

                    <ul>
                        <li data-coords="23,14"><?=$class2[11]?></li>
                    </ul>

                    <ul>
                        <li data-coords="24,15"><?=$class2[1]?></li>
                    </ul>

                    <ul data-color="rgba(253, 242, 174)" data-label="class3">
                        <li data-coords="11,2"><?=$class3[9]?></li>
                        <li data-coords="11,4"><?=$class3[8]?></li>
                        <li data-coords="11,5"></li>
                        <li data-coords="12,6" data-dir="S"><?=$class3[12]?></li>
                        <li data-coords="13,6"></li>
                        <li data-coords="14,7" data-dir="E"><?=$class3[10]?></li>
                        <li data-coords="14,9"><?=$class3[11]?></li>
                        <li data-coords="14,11"><?=$class3[7]?></li>
                        <li data-coords="15,12" data-dir="S"><?=$class3[5]?></li>
                        <li data-coords="17,12"><?=$class3[4]?></li>
                        <li data-coords="18,12"></li>
                        <li data-coords="19,13" data-dir="E"><?=$class3[3]?></li>
                        <li data-coords="19,14"><?=$class3[2]?></li>
                        <li data-coords="20,15" data-dir="S"><?=$class3[6]?></li>
                        <li data-coords="21,16" data-dir="E"><?=$class3[1]?></li>
                        <li data-coords="21,18"><?=$class3[0]?></li>
                    </ul>
                </div>
            </div>            
            <div class="aside" style="background-color:#FFF8DC">
                <div class="show_label" style="margin-top:10px; margin-bottom:10px; margin-left:10px">
                    <p id="in_text" style="font-size:16pt;">
                        <?php echo $post ?>
                    </p>
                </div>
                <div class="todo">
                    <?php
                        if ($userid) {
                    ?>
                    <form method="post" action="index.php" class="input_form">
                        <?php if (isset($errors)) { ?>
                            <p><?php echo $errors; ?></p>
                        <?php } ?>
                        <input id="hidden_input" type="hidden" name="hidden" class="hidden_input" value="<?php echo $post?>">
                        <input id="task_input" type="text" name="task" class="task_input">
                        <button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
                    </form>
                    <?php
                        }
                    ?>
                </div>
                <div class="show">
                    <table style="height:30px">
                        <thead>
                            <tr>
                                <th>N</th>
                                <th>Memo</th>
                                <th style="width: 60px;">:</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if ($userid) { ?>
                        <?php 
                            $tasks = mysqli_query($todo, "SELECT * FROM todo WHERE sub='$post'");

                            $i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
                            <tr>
                                    <td style="height:10px; font-size:12pt"> <?php echo $i; ?> </td>
                                    <td class="task" style="text-align=center; font-size:12pt;"> <?php echo $row['TASK']; ?> </td>
                                    <td class="delete">
                                        <button id="re_id"style="width:100%; height:20px; margin-bottom:7px;" type="button" name="remove" data-value="<?php echo $row['sub'];?>" value="<?php echo $row['TASK'];?>" onclick="remove_click(this.value, this.getAttribute('data-value'))" >삭제</button>
                                        <button id="re_id"style="width:100%; height:20px" type="button" name="update" data-value="<?php echo $row['sub'];?>" value="<?php echo $row['TASK'];?>" onclick="update_click(this.value, this.getAttribute('data-value'))" >수정</button>
                                    </td>
                            </tr>
                            <?php $i++; } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="footer" class="footer" style="border: 1px solid black; height:100px; display:flex; justify-content:space-around; align-items:center; font-size:11pt;">
            <div class="c_label1">
                <img src="img/one_year.jpg" style="margin-right:10px;">1학년</div>
            <div class="c_label2">
                <img src="img/two_year.jpg" style="margin-right:10px;">2학년</div>
            <div class="c_label3">
              <img src="img/three_year.jpg" style="margin-right:10px;">3학년</div>
        </div>
        <script id="dynamic"></script>
        <script type="text/javascript">
            $(".subway-map").subwayMap({ debug: true });
            var lis = document.getElementsByTagName("span");

            $(lis).click(function(e){
                var aa = e.target.innerText
              
                var form = document.createElement("form");
                form.setAttribute("charset", "UTF-8");
                form.setAttribute("method", "POST");  
                form.setAttribute("action", "index.php"); 

                var hiddenField = document.createElement("input");
                hiddenField.setAttribute("type", "hidden");
                hiddenField.setAttribute("name", "key");
                hiddenField.setAttribute("value", aa);

                form.appendChild(hiddenField);
                document.body.appendChild(form);
                form.submit();
            });

            function remove_click(e, a) {
                var form2 = document.createElement("form");
                form2.setAttribute("charset", "UTF-8");
                form2.setAttribute("method", "POST");  
                form2.setAttribute("action", "index.php"); 

                var hiddenField = document.createElement("input");
                hiddenField.setAttribute("type", "hidden");
                hiddenField.setAttribute("name", "remove");
                hiddenField.setAttribute("value", e);

                var hiddenField3 = document.createElement("input");
                hiddenField3.setAttribute("type", "hidden");
                hiddenField3.setAttribute("name", "task");
                hiddenField3.setAttribute("value", a);

                form2.appendChild(hiddenField);
                form2.appendChild(hiddenField3);
                document.body.appendChild(form2);
                form2.submit();
            }

            function update_click(e, a){
                var user_input = prompt("수정 할 내용을 입력하세요")
                if (user_input == null){
                    alert("아무일도 일어나지 않았습니다.");
                } else {
                    alert("수정이 완료되었습니다.")
                var form3 = document.createElement("form");
                form3.setAttribute("charset", "UTF-8");
                form3.setAttribute("method", "POST");  
                form3.setAttribute("action", "index.php"); 

                var hiddenField = document.createElement("input");
                hiddenField.setAttribute("type", "hidden");
                hiddenField.setAttribute("name", "update");
                hiddenField.setAttribute("value", user_input);

                var hiddenField2 = document.createElement("input");
                hiddenField2.setAttribute("type", "hidden");
                hiddenField2.setAttribute("name", "subject");
                hiddenField2.setAttribute("value", e);

                var hiddenField3 = document.createElement("input");
                hiddenField3.setAttribute("type", "hidden");
                hiddenField3.setAttribute("name", "task");
                hiddenField3.setAttribute("value", a);

                form3.appendChild(hiddenField);
                form3.appendChild(hiddenField2);
                form3.appendChild(hiddenField3);
                document.body.appendChild(form3);
                form3.submit();
                }
            }
        </script>
    </div>
</body>
</html>