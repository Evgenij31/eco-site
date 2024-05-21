<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in - Green Pulse</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="animations.css">
</head>

<body>
    <header>
        <img id="logo" src="img/logo-white.png" alt="Green Pulse Logo">

        <!-- responsive nav buttons -->
        <button id="open-nav-btn" onclick="openNav()">
            <img src="img/nav-icons/nav-bar-ico.png" alt="open navigation button">
        </button>
        <button id="close-nav-btn" onclick="closeNav()">
            <img src="img/nav-icons/x-ico.png" alt="open navigation button">
        </button>

        <!-- navigation menu -->
        <nav>
            <ul id="nav-ul">
                <li><a href="index.php#">Home</a></li>
                <li><a href="index.php#about-ecology">Ecology</a></li>
                <li><a href="index.php#biodiversity">Biodiversity</a></li>
                <li><a href="index.php#climate-change">Climate change</a></li>
                <li><a href="index.php#get-involved">Get Involved</a></li>
                <li id="log-in-btn"><a href="login.php">Log in</a></li>
            </ul>
        </nav>
    </header>

    <section id="user_panel">
        <div class="container">
            <?php
            function clearString($str)
            {
                // Using str_replace() function to replace the word 
                $res = str_replace(
                    array(
                        '\'',
                        '"',
                        ',',
                        ';',
                        '<',
                        '>'
                    ),
                    '',
                    $str
                );

                return $res;
            }

            $user_full_name = clearString($_REQUEST["full_name"]);
            $user_email = clearString($_REQUEST["user_email"]);
            $user_password = clearString($_REQUEST["user_password"]);

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "eco_db";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Error connecting with database:  " . $conn->connect_error);
            }

            $sql = "INSERT INTO users (Full_Name, Email, Pass)
        VALUES ('$user_full_name', '$user_email', '$user_password')";
            $result = $conn->query($sql);

            if ($result === TRUE) {
                echo "
            <div id=\"logged-in\">
                <p>You've successfully logged in as $user_full_name</p>
                <br>
                <button onclick=\"window.location.href='index.php';\" id=\"backBtn\">Go back</button>
            </div>";
            }
            ?>
        </div>
    </section>

    <footer>
        <div class="container">
            <ul>
                <li><a href="index.php#">Home</a></li>
                <li><a href="index.php#about-ecology">Ecology</a></li>
                <li><a href="index.php#biodiversity">Biodiversity</a></li>
                <li><a href="index.php#climate-change">Climate change</a></li>
                <li><a href="index.php#get-involved">Get Involved</a></li>
            </ul>
            <div id="footer-logo">
                <img src="img/logo-white.png" alt="Green Pulse Logo">
            </div>
            <ul>
                <li><a href="https://www.nature.com">nature.com</a></li>
                <li><a href="https://www.nature.org/en-us/">nature.org</a></li>
                <li><a href="https://ncx.com">ncx.com</a></li>
                <li><a
                        href="https://www.museothyssen.org/webdocs/conectathyssen/volver-naturaleza/en/">museothyssen.org</a>
                </li>
                <li><a href="https://www.photoscoper.co.uk">photoscoper.co.uk</a></li>
            </ul>
        </div>
        <div id="footer-bottom">
            <p>&copy; Green Pulse 2024. All rights reserved. Made by Evgenij</p>
        </div>
    </footer>

    <script src="app.js"></script>
</body>

</html>