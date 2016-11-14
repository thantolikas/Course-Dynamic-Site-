<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Επεξεργασία ανακοίνωσης</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>

    <?php 
    session_start();
    if (!$_SESSION['role'] =='Tutor') {
        header ("Location: login.php");
    }
    if (isset($_GET['type']) AND $_GET['type'] == 'edit') {

        include 'create-link.php';
        $id = $_GET['id'];
        $query = "SELECT * FROM announcements WHERE id='$id'";

        $results = mysqli_query($link, $query);

        $row = mysqli_fetch_row($results);
    ?>

     <div class="header"> 

        <h1> Επεξεργασία ανακοίνωσης </h1>

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

        <form action="edit-ann.php?id=<?php echo $row[0]; ?>" method="post"> 

            Θέμα: <input name="subject" type="text" value="<?php echo $row[2]; ?>"> <br><br>
            Κείμενο: <br> <textarea name="desc" type="text"><?php echo $row[3]; ?></textarea> <br><br>
            <input type="submit" value="Αποθήκευση">
        </form>

    </div>

<?php } else { ?>


    <div class="header"> 

        <h1> Προσθήκη νέας ανακοίνωσης </h1>

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

        <form action="add-new-ann.php" method="post"> 

            Θέμα: <input name="subject" type="text"> <br><br>
            Κείμενο: <br> <textarea name="desc" type="text"></textarea> <br><br>
            <input type="submit" value="Προσθήκη">
        </form>

    </div>
        <?php } ?>
        
    </body>

</html>