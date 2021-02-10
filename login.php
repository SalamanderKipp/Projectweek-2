<?php
include 'config/config.php';
if (isset($_POST['submit'])) {
    echo "start";
    session_start();
    $username      = $_POST['username'];
    $password   = $_POST['password'];
    $sql        = "SELECT * FROM tbl_users WHERE username = '$username'";
    $result     = $con->query($sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "start1";
        if ($result->num_rows > 0) {
            $dbUsername  = $row['username'];
            $dbPassword  = $row['password'];
            if (password_verify($password, $dbPassword)) {
                $_SESSION["username"]   = $dbUsername;
                header("Location: index.php");
            } else {
                die("Je inlog gegevens kloppen niet");
            }
        } else {
            die("Je inlog gegevens kloppen niet");
        }
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login | Eindopdracht</title>
    <link href='css/bootstrap.min.css' rel='stylesheet'>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
        <div class="collapse navbar-collapse" id="navcol-1"><a class="btn btn-primary ml-auto action-button" role="button" href="../eindopdracht/index.php">REGISTER</a></div>
        <span>
        </span>
    </nav>
    <div class="container">
        <form method="post">
            <h3>Login</h3>
            <hr />
            <form name='login' id='login' method='post'>
                <div class='form-group'>
                    <label for='username'>Username</label>
                    <input name='username' id='username' type='text' class='form-control' placeholder='username' style='cursor:text; background-color:#fff;' required />
                </div>
                <div class='form-group'>
                    <label for='password'>Password</label>
                    <input name='password' id='password' type='password' class='form-control' placeholder='password' style='cursor:text; background-color:#fff;' required />
                </div>
                <div class='form-group'>
                    <input type="submit" name='submit' id='submit' value="login" class='btn btn-primary btn-block'></input>
                </div>
            </form>
    </div>
</body>

</html>