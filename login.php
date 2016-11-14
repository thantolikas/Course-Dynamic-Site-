<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> Login  </title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
<?php 
    session_start();
    if (isset($_SESSION['role'])) {
        header ("Location: index.php");
    }

    ?>
    <div class="header"> 

        <h1> Login </h1>

    </div>

    <div class="loginform"> 

    <h3> Πιστοποίηση </h3>

    <?php if (isset($_GET['error']) AND $_GET['error'] == 1) { ?>
            Λάθος στοιχεία! Προσπαθήστε ξανά.

<?php } ?>
            <form action="authentication.php" method="post"> 

                Email: <input type="email" name="username"><br><br>
                Password: <input type="password" name="password"><br><br>
                <input type="submit" value="Login">

            </form>

    </div>
        
        
    </body>

</html>