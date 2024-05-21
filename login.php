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

    <section id="login">
        <div class="container">
            <h3>Log in</h3>
            <p>Enter your credentials, if you don't have an account we'll create one.</p>
            <br>
            <form action="action.php" method="POST">
                <input type="text" name="full_name" id="name" placeholder="Full Name" required>
                <br>
                <input type="email" name="user_email" id="email" placeholder="Email" required>
                <br>
                <input type="password" name="user_password" id="password" placeholder="Password" required>
                <br>
                <br>
                <input type="submit" value="Log in" id="submitBtn">
            </form>
        </div>
    </section>

    <!-- footer -->
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