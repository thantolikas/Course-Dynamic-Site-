<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title> Ανακοινώσεις </title>
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

    <div name="top" class="header"> 

        <h1> Ανακοινώσεις </h1>

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

    <?php 

    include 'create-link.php';

    $query = "SELECT * FROM announcements";

    $results = mysqli_query($link, $query);

    if ($_SESSION['role'] == 'Student') {

        while ($row = mysqli_fetch_row($results)) { ?>
         <div class="announcement"> 

        <h2>Ανακοίνωση <?php echo $row[0]; ?></h2> 
        <ul>
        <li><strong>Ημερομηνία:</strong> <?php echo $row[1]; ?> </li><br>
        <li><strong>Θέμα:</strong> <?php echo $row[2]; ?></li> <br>
        <?php echo $row[3]; ?>
        </ul>
    </div>
       <?php }
    }else {

               echo '<a href="add-new-announ.php">Προσθήκη νέας ανακοίνωσης</a> <br>'; 

        while ($row = mysqli_fetch_row($results)) { ?>
         <div class="announcement"> 

        <h2>Ανακοίνωση <?php echo $row[0]; ?> <a href="delete-ann.php?id=<?php echo $row[0]; ?>">[διαγραφή]</a><a href="add-new-announ.php?id=<?php echo $row[0]; ?>&type=edit">[επεξεργασία]</a></h2> 
        <ul>
        <li><strong>Ημερομηνία:</strong> <?php echo $row[1]; ?></li> <br>
        <li><strong>Θέμα:</strong> <?php echo $row[2]; ?></li> <br>
        <?php echo $row[3]; ?>
        </ul>
    </div>

<?php } }    ?>

    <a id="top" href="#top">< top ></a>

    </div>
        
        
    </body>

</html>