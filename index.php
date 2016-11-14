<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Αρχική Σελίδα </title>
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

        <h1> Αρχική Σελίδα </h1>

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

    <h3> Καλώς ήρθατε στα Εκπαιδευτικά Περιβάλλοντα Διαδικτύου  </h3>

    <p> Εδω μπορείτε να βρείτε πληροφορίες σχετικά με το μάθημα. Επιλέξτε από το μενού δίπλα για να πλοηγηθείτε στον ιστοχώρο. Στις "Ανακοινώσεις" θα βρείτε τα νέα και ανακοινώσεις σχετικά με το μάθημα. Αν θέλετε να επικοινωνήσετε με τον καθηγητή επιλέξτε "Eπικοινωνία". Επιλέξτε "Εγρασίες μαθήματος" για να βρείτε πληροφορίες σχετικά με τις εργασίες. Στα "Εγγραφα" θα βρείτε σχετικά PDF και άλλα έγγραφα που θα σας βοηθήσουν στο διάβασμα σας. </p> 

    <br>

    <img src="pic.jpg">


    </div>
        
        
    </body>

</html>