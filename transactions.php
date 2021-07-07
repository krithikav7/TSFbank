<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Transfer Money</title>
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
    <div>
        <h2>Transaction History</h2>
        <br>
        <div>
            <table>
                <thead style="color:black;">
                    <tr>
                        <th>SNO</th>
                        <th>Sender</th>
                        <th>Receiver</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                         include 'db_connection.php';
                         $sql="select * from transaction";
                         $query = mysqli_query($conn,$sql);
                         while($rows= mysqli_fetch_assoc($query))
                         { 
                    ?>
                    <tr>
                        <td><?php echo $rows['sno'];?></td>
                        <td><?php echo $rows['fromuser'];?></td>
                        <td><?php echo $rows['touser'];?></td>
                        <td><?php echo $rows['balance'];?></td>
                        <?php
                         }
                         ?>

                </tbody>
            </table>
        </div>
    </div>
    <footer>
        <p class="foot">Krithika © 2021</p>
    </footer>
</body>

</html>