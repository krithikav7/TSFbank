<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> customers data</title>
    <link rel="stylesheet" href="style.css">
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
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Balance</th>
        </tr>
        <?php
        $connection= mysqli_connect("localhost","root","","tsfbank");
        if($connection->connect_error) {
            die("COnnecton failed:" . $connection -> connect_error);
        }

        $sql = "SELECT `id`, `name`, `email`, `balance` FROM `customers`";
        $result = $connection -> query($sql);

        if ( $result -> num_rows >0) {
            while ( $row = $result -> fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["balance"]."</td></tr>";
            }
            echo "</table>";
        }
        else {
            echo "0 result";
        }
        $connection -> close();
        ?>
        <br>
        <a href="moneytransac.php"><button class="btn mt-3">Transfer</button></a>
    </table>
    <footer>
        <p class="foot">Krithika © 2021</p>
    </footer>
</body>

</html>