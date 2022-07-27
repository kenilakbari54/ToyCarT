<?php error_reporting(0);
if(isset($_POST['name']))
{
    $server="localhost";
    $username="root";
    $password="";

    $connection=mysqli_connect($server,$username,$password,"website_main");

    if(!$connection)
    {
        die("Connection failed due to".mysqli_connect_error());
    }

    echo "Connected Successfully";


    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $psw=$_POST['psw'];
    $cpsw=$_POST['cpsw'];

    if($psw==$cpsw)
    {
    echo"<br>";

    $sql= "INSERT INTO new_customer(name,email,number,psw,cpsw)VALUES('$name','$email','$number','$psw','$cpsw')";
}

$query=mysqli_query($connection,$sql);
if($query)
{
    echo "<br> Account Created ";

    echo "<br>";

    echo "<br>";

    echo "<br>";

    echo "<button type=submit ><a href=login.html> Return to login </a></button>";
}
else
{
    echo"<br> Error : ";
}
}
?>