<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website poging 2</title>
    <!-- <link rel="stylesheet" href="overig/main.css">  -->
    <link rel="stylesheet" href="overig/simple.css">
</head>
<body>
    
    <header>
            <div id="menu">
        <nav>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">PROFIEL</a></li>
                    <li><a href="#">INLOGGEN/REGISTREREN</a></li>
                </ul>
            </div>


            <div id="loginENregis">
                <form action="overig/login.overig.php" method="POST">
                    <input type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">LOGIN</button>
                </form>
                <a href="registreren.php">REGISTREREN</a>

                <form action="overig/loguit.overig.php" method="POST">
                    <button id= "btnLogout" type="submit" name="logout-submit">LOGOUT</button>
                </form>
            </div>
        </nav>
    </header>

</body>
</html>