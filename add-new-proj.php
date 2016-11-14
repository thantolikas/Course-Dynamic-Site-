<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> Προσθήκη νέας εργασίας </title>
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

        <h1> Προσθήκη νέας εργασίας </h1>

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

        <form action="add-new-homework.php" method="post" enctype="multipart/form-data"> 
           Στόχοι: <br> <textarea name="goals" type="text" placeholder="Παράδειγμα: Κατανόηση html,Κατανόηση php"></textarea> <br><br>
           Εκφώνηση: <input name="whattodo" type="file" id="filetoUp"> <br><br>
           Παραδοτέα: <br><textarea type="text" name="deliver" placeholder="Παράδειγμα: PowerPoint,Αρχειο pdf"></textarea> <br><br>
           Hμερομηνία παράδοσης: <input name="date" type="text"> <br><br>
            <input type="submit" value="Προσθήκη">
        </form>

    </div>
        
    </body>

</html>