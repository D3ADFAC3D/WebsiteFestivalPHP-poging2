<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website poging 2</title>
    <link rel="stylesheet" href="overig/simple.css">
</head>
<body>
    <header>
        <div id="titel">
            <h1><a href="index.php"> GC Festival Tickets</a></h1>
        </div>  
            <div id="loginENregis">
                <nav>
                    <form action="overig/login.overig.php" method="POST">
                        <input type="text" name="mailuid" placeholder="Username/E-mail...">
                        <input type="password" name="pwd" placeholder="Password">
                        <button type="submit" name="login-submit">LOGIN</button>
                    </form>

                    <a href="registreren.php">REGISTREREN</a>

                    <form action="overig/loguit.overig.php" method="POST">
                        <button id= "btnLogout" type="submit" name="logout-submit">LOGOUT</button>
                    </form>
                </nav>
            </div>
    </header>
<div id="contentBack">
</body>
</html>