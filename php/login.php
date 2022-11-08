<?php
    require('register.php');
    session_start();
    $errors = array();

    if (isset($_POST['login'])) {
            $name = mysqli_real_escape_string($connect, $_POST['name']);
            $password = mysqli_real_escape_string($connect, $_POST['password']);


        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM form_details WHERE name='$name' AND password='$password'";
            $results = mysqli_query($connect, $query);
            if (mysqli_num_rows($results) == 1) {
              $_SESSION['name'] = $name;
              $_SESSION['success'] = "You are now logged in";
              header('location:register.php');
            }else {
                array_push($errors, "Wrong name/password combination");
            }
    }
}
?>