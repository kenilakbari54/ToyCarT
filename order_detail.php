
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


    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $city=$_POST['city'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $comment=$_POST['comment'];

    echo"<br>";

    $sql= "INSERT INTO feedback(name,surname,city,email,mobile,comment)VALUES('$name','$surname','$city','$email','$mobile','$comment')";

$query=mysqli_query($connection,$sql);
if($query)
{
  
}
else
{
    echo"<br> Error : ";
}
}
?>