<!DOCTYPE html>
<html >

<head>
    <title>Template normal</title>
    <link rel="stylesheet" type="text/css" href="assets/css/templateNormal.css">
</head>

<body >
<div class="container">

    <header>
        <?php include 'views/partials/start.php';?>
    </header>

    <?php include 'views/'.$content_view; ?>

    <footer><?php include "views/partials/end.php"; ?></footer>

</div>

</body>
</html>