<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create user</title>
    <link rel="stylesheet" href="createuser.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body style="background-color: #9eb0eb;">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">TSF BANK</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html"><span class="glyphicon glyphicon-user"></span>Home</a></li>
            </ul>
        </div>
    </nav>
    <br><br>
    <?php
    include 'db_connection.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into customers(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('User created.');
                               window.location='customers.php';
                     </script>";
                    
    }
  }
?>

    <form method="post">
        <div class="form">
            <div class="title">Welcome</div>
            <div class="subtitle">Let's create your account!</div>
            <div class="input-container ic1">
                <input id="name" class="input" placeholder="" type="text" name="name" required />
                <div class="cut"></div>
                <label for="name" class="placeholder">Name</label>
            </div>
            <div class="input-container ic2">
                <input id="email" class="input" type="text" placeholder="" type="email" name="email" required />
                <div class="cut"></div>
                <label for="email" class="placeholder">E-Mail</label>
            </div>
            <div class="input-container ic2">
                <input id="balance" class="input" type="text" placeholder="" type="number" name="balance" required />
                <div class="cut cut-short"></div>
                <label for="balance" class="placeholder">Balance</>
            </div>
            <input class="submit" type="submit" value="CREATE" name="submit"></input>
            <input class="submit" type="reset" value="RESET" name="reset"></input>
        </div>
    </form>
    <footer>
        <p class="foot">Krithika © 2021</p>
    </footer>
</body>

</html>