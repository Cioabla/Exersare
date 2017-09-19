<!DOCTYPE html>

<html>

<head>
    <title><title><?php echo $pageTitle; ?></title></title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" >

    <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>views/css/signup.css">



</head>

<body>

    <div class="container-fluid">
        <div class="form-container">
            <header>
                   <h1>Register</h1>
            </header>
            <form action="" method="post">
                <div class="row form-label">
                    <aside class="col-sm-4">
                        <h3>Nume:</h3>
                        <h3>Username:</h3>
                        <h3>Password:</h3>
                        <h3>Retype Password:</h3>
                        <h3>Email:</h3>
                    </aside>
                    <aside class="inputs col-sm-8">
                        <input type="text" name="name">
                        <input type="text" name="username">
                        <input type="password" name="password">
                        <input type="password" name="retype_password">
                        <input type="email" name="email">
                    </aside>
                </div>
                <input type="submit" value="Submit"/>
                <div class="button-div">
                    <button><a href='/index/index'>Home page</a></button>
                    <button><a href='/login/login'>Login</a></button>
                </div>
            </form>

        </div>
    </div>

</body>