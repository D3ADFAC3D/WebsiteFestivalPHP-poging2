<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website poging 2</title>
    <link rel="stylesheet" href="overig/main.css">
</head>
<body>
    
    <header>
            <div id="linkjes">
        <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Profiel</a></li>
                    <li><a href="#">Inloggen/Registreren</a></li>
                </ul>
            </div>


            <div id="login&regis">
                <form action="overig/login.overig.php" method="POST">
                    <input type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">Login</button>
                </form>
                <a href="registreren.php">Registreren</a>

                <form action="overig/loguit.overig.php" method="POST">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>
            </div>
        </nav>
    </header>

</body>
</html>