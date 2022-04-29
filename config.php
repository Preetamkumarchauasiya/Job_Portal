<?php

session_start();
$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
echo "";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];

    $sql="INSERT INTO users(Name, email, password,phone_no) VALUES ('$name','$email','$password','$number')";
    if(mysqli_query($conn,$sql))
    {
        echo"Record inserted succesfully";
        header("Location:index.php");
    }
    else{
        echo"ERROR:could not able to execute $sql." .mysqli_error($conn);
    }

}
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:index.php");
    }
    else{
        $error="Email-id or password is incorrect";
    }
}
if(isset($_POST['submit1'])){
    $cname=$_POST['cname'];
    $demail=$_POST['demail'];
    $jd=$_POST['jd'];
    $position=$_POST['position'];
    $ctc=$_POST['ctc'];
    $skills=$_POST['skills'];

    $sql="INSERT INTO job(cName, position, jdesc, skills, ctc, email) VALUES ('$cname','$position','$jd','$skills','$ctc','$demail')";
    if(mysqli_query($conn,$sql))
    {
        echo"Record inserted succesfully";
        header("Location:index.php");
    }
    else{
        echo"ERROR:could not able to execute $sql." .mysqli_error($conn);
    }

}
if(isset($_POST['submit2'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $hire=$_POST['hire'];
    $posts=$_POST['posts'];
    $skills=$_POST['Skills'];
    $cname=$_POST['cname'];

    $sql="INSERT INTO detail( name, email, skills, hire, pass, post, cname) VALUES ('$name','$email','$skills','$hire','$pass','$posts','$cname')";
    if(mysqli_query($conn,$sql))
    {
        echo"Record inserted succesfully";
    }
    else{
        echo"ERROR:could not able to execute $sql." .mysqli_error($conn);
    }

}
mysqli_close($conn);
?>