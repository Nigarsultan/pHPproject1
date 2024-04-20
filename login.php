<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];


$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'alhamdulillah';

$conn = mysqli_connect($host,$user,$pass,$dbname);
$sql = "INSERT INTO login(username,password) value('$username','$password')";

mysqli_query($conn,$sql);
}

?>


    
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>login</title>
    <style>
        .color{
            color: white;
        }
        .width{
            width:130px;
        }
        </style>
</head>
<body>
    <section class="bg-white">
        <div class="smo">
        <div class="text-lg-center p-4 m-5">
        <div class=" bg-dark bg-gradient border border-primary-subtle">
            <div class="border border-black">
    <form action="#" method="POST">
        <h1 class="fst-italic fs-1 color my-2">log in </h1>
<p class="fst-italic fs-1 color ">username:<input type="text" name="username" class="bg-white fs-4 rounded-pill" id="username"></p><br>
<p class="fst-italic fs-1 color">password:<input type="text" name="password"class="bg-white fs-4 rounded-pill" id="password"></p><br>
<input type="submit" name="submit"class="fs-3 border rounded-pill my-2 ms-5 width" value="Submit">
</form><br><br>
</div>
<h1 class="color fst-italic fs-5">you don't have acount just create it...<p><a class="link-opacity-100" href="bdd.php"><span id="signup"class=" fs-2 fst-italic">sign up</span></a></p> </h1>
</div>

</div>

<section>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>