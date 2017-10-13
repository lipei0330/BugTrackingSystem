<?php

require_once("config.php");
require_once("header.php");

?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
    <title>Bug Tracking System</title>

</head>



<style>

    body {
        background: url(bug.jpg) no-repeat center center fixed;
        top:0%;
        left:0;
        min-width:200%;
        min-height:200%;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>

        <h1>Bug Tracking System <br /><br /></h1>
        <h2>Please Log In <br /><br /></h2>

        <form name="login" method="post" action="loginCheck.php">

            <p>
                <label>Username:</label>
                <input type="text" name="username" />
            </p>
            <p>
                <label>Password:</label>
                <input type="password" name="password" />
            </p>
            <p>
                <label>&nbsp;</label>
                <input type="submit" value="Login" class="submit" />
            </p>
        </form>


</body>
</html>


