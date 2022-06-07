<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <form action="ceklogin.php" method="post"class="form-login">
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo"<h1><center>username dan password tidak sesuai !</center></h1>";
            }
        }
        ?>
<center mt-5 >
<div class ="bgf">
        <divv class="f-out">
            <h4>login</h4>
            <div class="line">
                <input type="text" placeholder="username" name="uname" class="from control" require>
            </div>
            <div class="line">
                <input type="password" placeholder="password" name="psw" class="from control" require>
            </div>
            <div>
                <button type="submit" class="btn btn-outline-success">login</button>
                <a href="index.php"><button type="button" class="btn btn-outline-danger">cancel</button></a>
            </div>
            <div class="line">
                <label> Don't have an account? Click <a href="register.php">here</a></label>
            </div>
        </div>
    </div>
    </center>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>