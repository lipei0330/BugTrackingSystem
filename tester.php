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
<body>
<h1>Bug Tracking System</h1>
<h2>Welcome Tester</h2><br />

<form name="Home" method="post" action="testerbug.php">
    <input type="submit" name="bug" value="Bugs" style=" color:darkorange;background-color:LightGray;height:50px; width:150px"><br /><br /><br />
</form>
<form name="Home" method="post" action="testerHistory.php">
    <input type="submit" name="history" value="History" style=" color:black;background-color:LightGray;height:50px; width:150px"><br /><br /><br />
</form>
<form name="Home" method="post" action="logout.php">
    <input type="submit" name="logout" value="Logout" style=" color:darkorange;background-color:LightGray;height:50px; width:150px"><br /><br /><br />
</form>
</body>
</html>