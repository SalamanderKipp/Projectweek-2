<?php
include 'config/config.php';
if (isset($_POST['submit'])) {
    session_start();
    $username      =    $_POST['username'];
    $password      =    $_POST['password'];
    $sql        = "SELECT * FROM tbl_users WHERE username = '$username'";
    $result     = $con->query($sql);
    while ($row = mysqli_fetch_array($result)) {
        if ($result->num_rows > 0) {
            $dbUsername  = $row['username'];
            $dbPassword  = $row['password'];
            $dbUser      = $row['user'];
            if (password_verify($password, $dbPassword)) {
                $_SESSION["username"]   = $dbUsername;
                $_SESSION["userType"]   = $dbUser;

                if ($dbUser == "admin") {
                    header("Location: admin.php");
                } else {
                    header("Location: index.php");
                }
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
    <link href='assets/css/bootstrap.min.css' rel='stylesheet'>
	<link href='assets/css/style.css' rel='stylesheet'>
</head>

<body>
    <?php
    include 'includes/navbar.php';
    ?>
    <div class="container">
        <h3>Login</h3>
        <hr />
        <form name='login' id='login' method='post'>
            <div class='form-group'>
                <label for='username'>Username</label>
                <input name='username' id='username' type='text' class='form-control' placeholder='username' style='cursor:text; background-color:#fff;' style='cursor:text; background-color:#fff;' onfocus='this.removeAttribute("readonly");' readonly required />
            </div>
            <div class='form-group'>
                <label for='password'>Password</label>
                <input name='password' id='password' type='password' class='form-control' placeholder='password' style='cursor:text; background-color:#fff;' style='cursor:text; background-color:#fff;' onfocus='this.removeAttribute("readonly");' readonly required />
            </div>
            <div class='form-group'>
                <input type="submit" name='submit' id='submit' value="login" class='btn btn-warning btn-block'></input>
            </div>
        </form>
    </div>
    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>