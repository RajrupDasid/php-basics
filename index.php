<?php
    $host='localhost';
    $port='5432';
    $user='postgres';
    $dbname='travel';
    $password='passcode';
    $connection_string="host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";
    $dbconn=pg_connect($connection_string);
    if (isset($_POST['submit'])&&!empty($_POST['submit'])){
        $sql="insert into trip(name,gender,age,address,email,phone,description)values('".$_POST['name']."','".$_POST['gender']."','".$_POST['age']."','".$_POST['address']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['description']."')";
        $ret=pg_query($dbconn,$sql);
        if($ret){
            echo "Data saved successfully";
        }else{
            echo "something went wrong";
        }
    }

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="image">
    <div class="container">
    <h1> Welcome to Travel Trip </h1>
        <p>Please fill the form</p>
        <p>Enter your details for confirmation </p>
      <h2>Register Here </h2>
      <form method="post" action="index.php">
          <label for="name">Name:</label>
          <input type="text"  id="name" placeholder="Enter name" name="name" requuired>
          <label for="gender">gender:</label>
          <input type="text"  id="gender" placeholder="Enter gender" name="gender" >
          <label for="age">Age:</label>
          <input type="text"  id="age" placeholder="Enter Age" name="age" >
          <label for="address">Address:</label>
          <input type="text"  id="address" placeholder="Enter Address" name="address" >
          <label for="email">Email:</label>
          <input type="email"  id="email" placeholder="Enter email" name="email">
          <label for="pwd">Mobile No:</label>
          <input type="number" class="form-control" maxlength="10" id="mobileno" placeholder="Enter Mobile Number" name="phone">
          <label for="description">description:</label>
          <input type="text"  id="description" cols="30" rows="10" placeholder="Enter description" name="description" >
        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
      </form>
    </div>
    <script src="index.js"></script>
</body>
</html>
