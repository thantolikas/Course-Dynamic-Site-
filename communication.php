<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Επικοινωνία  </title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
<?php 
    session_start();
    if (!isset($_SESSION['role'])) {
        header ("Location: login.php");
    }

    ?>
    <div class="header"> 

        <h1> Επικοινωνία </h1>

    </div>

    <div class="navigation"> 

        <ul> 
            <li><a href="index.php">Αρχική Σελίδα</a></li>
            <li><a href="announcement.php">Ανακοινώσεις</a></li>
            <li><a href="communication.php">Επικοινωνία</a></li>
            <li><a href="documents.php">Έγγραφα μαθήματος</a></li>
            <li><a href="homework.php">Εργασίες</a></li>
        </ul>

    </div>

    <div class="content"> 


    <div class="announcement"> 

    <?php if (isset($_GET['error']) AND $_GET['error'] == 1) { echo "Πρόβλημα!Ξαναπροσπαθείστε.";}
        elseif (isset($_GET['error']) AND $_GET['error'] == 0) {
            echo "Επιτυχής αποστολή!";
         } ?>

        <h2>Αποστολή email μέσω web φόρμας</h2> 
        <form action="send-email.php" method="post">
            <strong>Αποστολέας:</strong> <input type="email" name="sender" /> <br>
            <strong>Θέμα:</strong> <input type="text" name="subject" /> <br>
            <strong>Κείμενο:</strong><br> <textarea type="text" name="keimeno"> </textarea> <br>
            <input type="submit" value="Αποστολή"> 
        </form>
    </div>

    <div class="announcement"> 

        <h2>Αποστολή e-mail ε χρήση e-mail διεύθυνσης</h2> 
        Εναλλακτικά μπορείτε να αποστείλετε e-mail στην παρακάτω διεύθυνση ηλεκτρονικού ταχυδρομείου <a href="mailto:tutor@csd.auth.test.gr" target="_top">tutor@csd.auth.test.gr</a>


    </div>


    </div>
        
        
    </body>

</html>