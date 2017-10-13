

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
<h1>Bug Tracking System</h1><br />



</body>
<?php
/**
 * Created by PhpStorm.
 * User: PraviinM
 * Date: 9/28/15
 * Time: 9:54 PM
 */


require_once("config.php");


$thisbugID = $_POST['Bug_ID'];



$updatedStatus=updateStatus($thisbugID );
if (updateStatus($thisbugID)){ header("Location:developer.php"); die(); }
?>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: PraviinM
 * Date: 9/28/15
 * Time: 9:54 PM
 */


require_once("config.php");


$thisbugID = $_POST['Bug_ID'];



$updatedStatus=updateStatus($thisbugID );
if (updateStatus($thisbugID)){ header("Location:developer.php"); die(); }
?>


//display the result that was returned by the createNewUser function - in this case we usually get a 1 when the
//update is completed successfully.
echo $updatedStatus;

/**
 * Created by PhpStorm.
 * User: kavit
 * Date: 3/18/2017
 * Time: 6:43 PM
?>
 * Created by PhpStorm.
 * User: kavit
 * Date: 4/30/2017
 * Time: 1:55 AM
 */