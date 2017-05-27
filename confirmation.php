<?php session_start(); ?>
<?php session_start(); ?>
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
        <?php require_once "nav.php"; ?>
            <div class="confirmationtext">
                <h3>Payment Received</h3>
                <h3>Here is your receipt</h3>
                <div class="personaldetails">
                    <?php echo $_SESSION['fname']; ?><br>
                    <?php echo $_SESSION['lname']; ?><br>
                    <?php echo $_SESSION['email']; ?><br>
                    <?php echo $_SESSION['phonenumber']; ?><br>
                    <?php echo $_SESSION['ccardnum']; ?><br>
                    <?php echo $_SESSION['ticketid']; ?>
                </div>
            </div>

<?php require_once "footer.php";?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src = 'main.js'></script>
    </body>
</html>



