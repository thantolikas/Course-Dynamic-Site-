<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>  Έγγραφα μαθήματος</title>
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

        <h1> Έγγραφα μαθήματος </h1>

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

    $query = "SELECT * FROM projects";

    $results = mysqli_query($link, $query);

    if ($_SESSION['role'] == 'Tutor') {

    echo '<a href="add-new-proj.php">Προσθήκη νέας εργασίας</a> <br>'; 
}
        while ($row = mysqli_fetch_row($results)) { ?>
         <div class="announcement"> 

        <h2>Εργασία <?php echo $row[0]; ?></h2> 
        <i>Στόχοι: Οι στόχοι της εργασίας είναι </i> <br>
            <ol> 
            <?php 
                $string = $row[1];
                $token = strtok($string,",");
                while ($token !== false) {
                    echo '<li> ' . $token . '</li>';
                     $token = strtok(",");
                }

             ?>
            </ol>
            <i>Εκφώνηση: </i> <br>

            <ul><li>Κατεβάστε την εκφώνηση από <strong><a href="documents/<?php echo $row[2]; ?>" download>εδώ</a></strong> </li> </ul>
        <br>

        <i> Παραδοτέα </i> <br>
            <ol> 
            <?php 
                $string = $row[3];
                $token = strtok($string,",");
                while ($token !== false) {
                    echo '<li> ' . $token . '</li>';
                     $token = strtok(",");
                }

             ?>
            </ol>

        <i class='red'>Ημερομηνία παράδοσης: </i> <?php echo $row[4];?>

    </div>
       <?php }
          ?>

    <a id="top" href="#top">< top ></a>

    </div>
        
        
    </body>

</html>