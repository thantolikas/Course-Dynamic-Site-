<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Προσθήκη νέου εγγράφου</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>

    <?php 
    session_start();
    if (!$_SESSION['role'] =='Tutor') {
        header ("Location: login.php");
    }
    ?>

    <div class="header"> 

        <h1> Προσθήκη νέου εγγράφου </h1>

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

        <form action="upload.php" method="post" enctype="multipart/form-data"> 
           Τίτλος: <input name="title" type="text"> <br><br>
           Περιγραφή: <input name="desc" type="text"> <br><br>
            Αρχείο: <input type="file" name="filetoUp" id="filetoUp">
            <input type="submit" name='submit' value="Προσθήκη">
        </form>

    </div>
        
    </body>

</html>