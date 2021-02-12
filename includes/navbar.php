<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><img src="./media/img/Eventhub-logo.png">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>

            <?php
            if (isset($_SESSION['userType'])) {
                if ($_SESSION['userType'] == "admin") {
                    echo '<a href="admin.php" type="button" class="btn btn-outline-warning mr-2">Admin</a>';
                    echo '<a href="createEvent.php" type="button" class="btn btn-outline-warning mr-2">Create Event</a>';
                }
                if ($_SESSION['userType'] == "member") {
                    echo '<a type="button" href="createEvent.php" class="btn btn-outline-warning mr-2">Create Event</a>';
                }
                echo  '<a type="button" href="logout.php" class="btn btn-outline-warning mr-2">Log out</a>';
            } else {
                echo '<a type="button" href="login.php" class="btn btn-outline-warning mr-2">Login</a>
                    <a type="button" href="register.php" class="btn btn-outline-warning mr-2">Register</a>';
            }
            ?>
        </div>
</nav>