<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><img src="./media/img/Eventhub-logo.png"></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item mt-2">
                    <a href="index.php" type="button" class="btn btn-outline-warning mr-2">Home</a>
                </li>
                <li class="nav-item mt-2">
                    <a href="contact.php" type="button" class="btn btn-outline-warning mr-2">Contact</a>
                </li>
                <li class="nav-item mt-2">
                    <a href="about.php" type="button" class="btn btn-outline-warning mr-2">About</a>
                </li>
            </ul>
                <!-- checkt wat voor user je bent of ingelogt en laat nieuwe buttons zien -->
            <?php
            if (isset($_SESSION['userType'])) {
                if ($_SESSION['userType'] == "admin") {
                    echo '<a href="admin.php" type="button" class="btn btn-outline-warning mr-2 mt-2">Admin</a><br>';
                    echo '<a type="button" href="myevents.php" class="btn btn-outline-warning mr-2 mt-2">My events</a><br>';
                    echo '<a href="createEvent.php" type="button" class="btn btn-outline-warning mr-2 mt-2">Create Event</a>';
                }
                if ($_SESSION['userType'] == "member") {
                    echo '<a type="button" href="myevents.php" class="btn btn-outline-warning mr-2 mt-2">My events</a><br>';
                    echo '<a type="button" href="createEvent.php" class="btn btn-outline-warning mr-2 mt-2">Create Event</a>';
                }
                echo  '<a type="button" href="logout.php" class="btn btn-outline-warning mr-2">Log out</a>';
            
            } else {
                echo '<a type="button" href="login.php" class="btn btn-outline-warning mr-2 mt-2">Login</a>
                <br>
                    <a type="button" href="register.php" class="btn btn-outline-warning mr-2 mt-2">Register</a>';
            }
            ?>
        </div>
</nav>