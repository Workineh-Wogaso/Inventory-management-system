<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Signin</title>
</head>

<body>
    <?php
    include_once 'include/header.php';
    ?>
<div class="form">
    <form align: left>
        <div id="user_name">
            <label>User Name</label>
            <input type="text" name="user_name">
        </div>
        <div id="password">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <button>Signin</button>
        <p>Do not have an account
            <a href="signup.html">
                <input type="button" class="button" id="btn" value="Signup"></a>
        </p>

    </form>
    </div>
</body>

</html>