<?php
    $name = htmlspecialchars(trim($_POST['name']));
    $tel = htmlspecialchars(trim($_POST['tel']));
    $petspec = htmlspecialchars(trim($_POST['petspec']));
    $petname = htmlspecialchars(trim($_POST['petname']));
    $petage = htmlspecialchars(trim($_POST['petage']));
    $visreas = htmlspecialchars(trim($_POST['visreas']));
    $date = $_POST['date'];

    $connect = mysqli_connect("localhost", "root", "", "student32");

    $mysql = new mysqli('localhost','root','','student32');

    $mysql->query("INSERT INTO `form` (`name`, `tel`, `petspec`, `petname`, `petage`, `visreas`, `date`) 
    VALUES ('$name', '$tel', '$petspec', '$petname', '$petage', '$visreas', '$date')");

    $mysql->close();

    header('Location: index.html');
