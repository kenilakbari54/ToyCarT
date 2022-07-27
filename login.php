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
    $psw=$_POST['psw'];


    echo"<br>";

    $sql= " if(name='$name'AND psw='$psw')";


$query=mysqli_query($connection,$sql);
if($query)
{
    echo "<br> data inserted ";
}
else
{
    echo"<br> Error : ";
}
}
?>