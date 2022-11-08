<?php
$connect = mysqli_connect('localhost','root','','form');

if(isset($_POST['submit'])){
        $n = $_POST['name'];
        $a = $_POST['age'];
        $e = $_POST['email'];
        $nu = $_POST['number'];
        $p = $_POST['password'];

    $query ="INSERT INTO form_details(name,age,mail,contact,password)VALUES('$n','$a','$e','$nu','$p')";
    $result=mysqli_query($connect,$query);
    if($result){
        echo "<script>alert('registered successfully !')</script>";
    }
    else{
        echo"<script>alert('Failed to register')</script>";
    }
    
}
?>