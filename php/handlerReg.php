<?php
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    //echo "Имя: $name, Фамилия: $lastname, E-mail: $email, Пароль: $pass";
    $mysqli = new mysqli("localhost", "root", "", "php1901");
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email'");
    if($result->num_rows){
        echo "Такой пользователь уже существует <a href='/reg.php'>Зарегестрировать другого</a>";
    }else{
        $mysqli->query("INSERT INTO `users`(`name`, `lastname`, `email`, `pass`) VALUES ");
        echo "Пользователь зарегистрирован!";
        header("Location: /login.html");
    }
