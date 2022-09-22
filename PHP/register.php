<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/register.css">
</head>
<body>
    <div class="container">
        <form name="member_form" method="post" action="register_insert.php" id="form" class="form">
            <h2>회원가입</h2>
            <div class="form-control">
                <label for="username">username</label>
                <input type="text" id="username" name="username" placeholder="Enter username">
                <small>Error</small>
            </div>
            <div class="form-control">
                <label for="username">id</label>
                <input type="text" id="id" name="id" placeholder="Enter id">
                <small>Error</small>
            </div>
            <div class="form-control">
                <label for="email">email</label>
                <input type="text" id="email" name="email" placeholder="Enter email">
                <small>Error</small>
            </div>
            <div class="form-control">
                <label for="password">password</label>
                <input type="password" id="password" name="password" placeholder="Enter password">
                <small>Error</small>
            </div>
            <div class="form-control">
                <label for="password2">confirm password</label>
                <input type="password" id="password2" name=password2 placeholder="Enter password2">
                <small>Error</small>
            </div>
            <button type="submit">submit</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>