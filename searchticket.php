<? session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Stadium Tickets App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="css/bootstrap.min.css" rel="stylesheet">
         <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
      <?php require_once "nav.php";?>
        <form method="post" action="searchticket.php">
            <label>Search for the username
                <input type="text" name="fname">
            </label>
            <input type="submit" name="submit" value="Search">
            </form>
      <?php require_once "footer.php";?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src = 'main.js'></script>
    </body>
</html>