<!DOCTYPE html>
<html>
<head>
    <title>Bug Tracking System</title>

</head>

<html>

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
<h1>Bug Tracking System</h1>
<body><br /><br />
<form name="Home" method="post" action="display.php">

    <input type="submit" name="read" value="Display All Users" style=" color:darkorange;background-color:LightGray;height:50px; width:150px"><br /><br /><br /><br />
</form>

    <form name="Home" method="post" action="display1.php">
        <input type="submit" name="delete" value="Delete Users " style=" color:black;background-color:LightGray;height:50px; width:150px"><br /><br /><br /><br />
    </form>
<form name="Home" method="post" action="display.php">
     <input type="submit" name="update" value="Update Users" style=" color:darkorange;background-color:LightGray;height:50px; width:150px"><br /><br /><br /><br />
</form>
<form name="Home" method="post" action="admin.php">
    <input type="submit" name="Home" value="Admin Home " style=" color:black;background-color:LightGray;height:50px; width:150px">
</form>
</body>
</html>