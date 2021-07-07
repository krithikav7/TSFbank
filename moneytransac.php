<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
    button:hover {
        background-color: #616C6F;
        color: white;
    }
    </style>
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
    $connection = mysqli_connect("localhost", "root", "", "tsfbank");
    $sqli = "SELECT * FROM `customers`";
    $result = mysqli_query($connection,$sqli);
?>


    <h2>Transfer Money</h2>
    <br>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>E-Mail</th>
                <th>Balance</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
            <tr>
                <td><?php echo $rows['id'] ?></td>
                <td><?php echo $rows['name']?></td>
                <td><?php echo $rows['email']?></td>
                <td><?php echo $rows['balance']?></td>
                <td><a href="selectuser.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn"
                            name="transact">Transact to</button></a></td>
            </tr>
            <?php
                    }
                ?>

        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <footer>
        <p class="foot">Krithika © 2021</p>
    </footer>
</body>

</html>