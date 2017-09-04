
<!DOCTYPE html>

<html>

<head>
    <?php
    include 'libs/Bootstrap.php';

    ?>

    <link rel="stylesheet" type="text/css" href="assets/css/start.css">
    <title>Head page</title>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Cioabla</a>
             </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="preferinte.php">Preferinte</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>


            </ul>
            <ul class="nav navbar-nav" style="position:absolute; right:0;">

                <li class="login"><a href="login.php">Login</a></li>
                <li class="Sign in"><a href="signIn.php">Sign in</a></li>
            </ul>
        </div>
    </nav>
</body>

</html>