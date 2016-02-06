<?php
/**
 * Created by PhpStorm.
 * User: rAkesh
 * Date: 06-Dec-15
 * Time: 5:36 PM
 */

mysql_connect("localhost","root","");
mysql_select_db("minipro");

?>

<html xmlns="http://www.w3.org/1999/html">
<head>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="jquery/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery/jquery-ui.js"></script>

</head>
<body style="padding: 0px;margin: 0px">
<div style="background-color: #000000;height: 80px;width: 100%;"></div>

<div style="height: 30%;width: 50%;background-color: white ;">


        <?php
if(isset($_POST['submit']))
{
    extract($_POST);
$text=$_POST['text'];
   $name=$_POST['name1'];


    $quer=mysql_query("select * from contacts where name='$name'");

    $res=mysql_fetch_array($quer);
    $email=$res['email'];

}
?>
    <form action="http://mailthis.to/<?php echo $email?>" method="post">
        <div>
            <label for="email">Email Address:
                <input type="email" name="email" id="name" value="<?php echo $email; ?>"  style="border: none" readonly/>
        </div>

        <br>
        <div>
            <label for="message">Message:</label>
            <br>


                <input type="text" class="form-control" style="width: 500px;height: 100px;margin: 0px;padding: 0px"  value="<?php echo $text ;?>" name="message">

        </div>

        <div>
            <input type="submit" value="Contact Us" />
        </div>
    </form>
    </div>
</body>
</html>