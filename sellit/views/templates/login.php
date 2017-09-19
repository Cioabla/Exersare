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

        <link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>views/css/login.css">



    </head>
    <body>
        <div class="login-container container-fluid">
                <header>
                    <h5 class="header-container">Login</h5>
                </header>
                <div class="error">
                    <?php if(isset($data['error'])){ ?>
                        <h1><?php echo $data['error'] ?></h1>
                    <?php } ?>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <form action="" method="post">
                            <div class="login col-sm-7">
                                <div class="inp">
                                    <h1>User:</h1>
                                    <input type="text" name="user">
                                </div>
                                <div class="inp2">
                                     <h1>Password:</h1>
                                    <input type="password" name="password">
                                </div>
                                <div class="inp3">
                                    <h1>Remember:</h1>
                                    <input type="checkbox" name="remember" value="remember">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <input type="submit" value="Submit">

                            </div>
                        </form>
                        <div class="redirect-home">
                            <button><a href='/index/index'>Home page</a></button>
                        </div>
                    </div>
                </div>
        </div>
    </body>
</html>