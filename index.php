<!DOCTYPE html>
<html>
    <head>
        <title> CLEAN-E</title>
        <link rel="stylesheet"href="style.css">
    </head>
    <body>
        <?php>
        session_start();
        $ SESSION;
        <div class="main">
            <div class="navbar">
                <div class="icon">
                    <h2 class="logo">CLEAN-E</h2>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">SERVICE</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                </div>
                <div class="search">
                    <input class="srch"type="search"name="" placeholder="type to text">
                    <a href="#"><button class="btn">Search</button></a>
                </div>
            </div>
            <div class="content">
                <h1>clean-E waste<br><span> management </span> <br>system</h1>
                <p class="par">The main objective of this project is a sustainable system that will help<br> maintain and conserve the environment thus preventing pollution and other <br>possible sequent effects and also establish and maintain an ongoing planning<br> and plan implementation process to meet current and future needs.</p>
                <button class="cn"><a href="#">CONTACT US</a></button>
                <div class="form">
                    <h2>Login Here</h2>
                      <input type="email" name="email"placeholder="Enter Email Here">
                      <input type="password" name=""placeholder="Enter Password Here">
                      <button class="btnn"><a href="#">login</a></button>

                    <p class="link">Don't have an account?<br>
                    <a href="signup.php">Sign up </a>here</a></p>
                    <p class="liw">Log in with</p>

                    <div class="icon">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>
                </div>
            </div>

        </div>
        <script srch="https://unpukg.com/ionicons@5.4.0/dist/ionicons.js"></script>
        ?>
    </body>
</html>