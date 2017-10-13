<?php
/**
 * Created by PhpStorm.
 * User: arfaj
 * Date: 4/27/2017
 * Time: 12:41 AM
 */
?>
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
    <table border="0" cellspacing="0" cellpadding="0" width="10%">
        <tr>
            <td>
                <form name="Home" method="post" action="">

                    <input type="submit" name="admin" value="Admin" style=" color:darkorange;background-color:LightGray;height:50px; width:100px">
                </form>
            </td>
            <td><br /><br />
                <form name="Home" method="post" action="">
                    <input type="submit" name="tester" value="Tester" style=" color:black;background-color:LightGray;height:50px; width:100px">
                </form>
            </td>
        </tr>
    </table>
    <form name="Home" method="post" action="">
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="submit" name="developer" value="Developer" style=" color:darkorange;background-color:LightGray;height:50px; width:100px"><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    </form>
    <?php
    if(isset($_POST["admin"]))
    { header("Location:index1.php"); die(); }
    if(isset($_POST["developer"]))
    { header("Location:index1.php"); die(); }
    if(isset($_POST["tester"]))
    { header("Location:index1.php"); die(); }
    ?>

    <table border="0" cellspacing="0" cellpadding="0" width="15%">
        <tr>
            <td>
                <form name="Home" method="post" action="contact.php">
                    <input type="submit" name="contact" value="Contact us"   style=" color:darkorange;background-color:LightGray;height:50px; width:100px">
                </form>
            </td>
            <td>
                <form name="Home" method="post" action="aboutus.php">
                    <input type="submit" name="about" value="About us"   style=" color:black;background-color:LightGray;height:50px; width:100px ">

                </form>
            </td>
        </tr>
    </table>


    </body>
    </html>

<?php
/**
 * Created by PhpStorm.
 * User: kavit
 * Date: 5/1/2017
 * Time: 10:07 AM
 */