<!DOCTYPE html>
<html>
<head>

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

<h1>Bug Tracking System</h1>



<?php

require_once("config.php");


//Prevent the user visiting the logged in page if he/she is already logged in
//if(isUserLoggedIn()) { header("Location: myaccount.php"); die();}


//Forms posted
if(!empty($_POST))
{
	$errors = array();
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	//Perform some validation

	if($username == "")
	{
		$errors[] = "Please Enter Username";
	    echo "<p align = 'left'><font color='red' size = '12pt'>Please Enter Username! <br />";
	}
	if($password == "")
	{
        $errors[] = "Please Enter Password";
	    echo  "<p align = 'left'><font color='red' size = '12pt'>Please Enter Password ! <br />";
	}

	if(count($errors) == 0)
{
//retrieve the records of the user who is trying to login
    $userdetails = fetchUserDetails($username);

        if ($password != $userdetails["Password"]){
            $errors[] = "Soory, Invalid password. Please try again!";
            echo "<p align = 'left'><font color='red' size = '12pt'>Soory, Invalid password. Please try again!";
        } else {

            $loggedInUser = new loggedInUser();

            $loggedInUser->user_id = $userdetails["UserID"];
            $loggedInUser->user_name = $userdetails["UserName"];
            $loggedInUser->hash_pw = $userdetails["Password"];
            ?>
            <h2>Welcome, <?php echo "$loggedInUser->user_name"."<br /><br />"; ?></h2>
            <?php

            $_SESSION["ThisUser"] = $loggedInUser;

                if (isAdmin()) { ?>
        <form name="adminHome" method="post" action="admin.php">
        <input type="submit" name="adminhome" value="Admin Home"
               style=" color:darkorange;background-color:LightGray;height:50px; width:150px"><br/><br/><br/>
        </form>
        <form name="logout" method="post" action="logout.php"><input type="submit" name="logout" value="Log Out"
                                                                 style=" color:darkorange;background-color:LightGray;height:50px; width:150px"><br/><br/><br/>
        </form>

        <?php }
        else if (isDeveloper()){ ?>
            <form name="developerHome" method="post" action="developer.php">
            <input type="submit" name="developerhome" value="Developer Home"
               style=" color:darkorange;background-color:LightGray;height:50px; width:150px"><br/><br/><br/>
            </form>
            <form name="logout" method="post" action="logout.php">
            <input type="submit" name="logout" value="Log Out"
               style=" color:darkorange;background-color:LightGray;height:50px; width:150px"><br/><br/><br/>
            </form>

            <?php } else { ?>
                <form name="testerHome" method="post" action="tester.php">
                <input type="submit" name="testerhome" value="Tester Home"
                style=" color:darkorange;background-color:LightGray;height:50px; width:150px"><br/><br/><br/>
                </form>
                <form name="logout" method="post" action="logout.php">
                <input type="submit" name="logout" value="Log Out"
                style=" color:darkorange;background-color:LightGray;height:50px; width:150px"><br/><br/><br/>
                </form>

                <?php }
        }

    
}













	}






