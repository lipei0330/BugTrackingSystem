<!DOCTYPE html>
<html>
<head>
    <h1>Bug Tracking System</h1>


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
<body>
<h2>Welcome Developer</h2><br />

<form name="Home" method="post" action="Display_To_Change_status.php">
    <input type="submit" name="bug" value="Bugs" style=" color:darkorange;background-color:LightGray;height:50px; width:150px"><br /><br /><br />
</form>
<form name="Home" method="post" action="developerHistory.php">
    <input type="submit" name="history" value="History" style=" color:black;background-color:LightGray;height:50px; width:150px"><br /><br /><br />
</form>
<form name="Home" method="post" action="logout.php">
    <input type="submit" name="logout" value="Logout" style=" color:darkorange;background-color:LightGray;height:50px; width:150px"><br /><br /><br />
</form>
</body>
</html>