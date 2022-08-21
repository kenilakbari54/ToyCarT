<?
if(isset($_POST['name']))
{
    $server="sql201.epizy.com";
    $username="epiz_32257577";
    $password="TWUzHAbWgT0zJ";
    $dbname="epiz_32257577_toycart";

    $connection=mysqli_connect($server,$username,$password,$dbname);

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
    echo "<center>";
    echo "<br> Thanks for Giving feedback ";
    echo "<br>";

    echo "<br>";

    echo "<br>";

    echo "<button type=submit ><a href=index.html> Return to Home </a></button>";
}
else
{
    echo"<br> Error : ";
}
}
?>