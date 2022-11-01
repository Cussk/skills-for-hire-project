<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>

    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <title>Admin Confirm</title>

    <?php
        include 'header.php';
    ?>

<main>
<h2>Admin - Confirm</h2>
<hr>
<?php // Get var from form
  
$heading_v = mysqli_real_escape_string($conn, $_POST['heading']);
//echo "heading (checking) " . $heading_v;
$tripDate_v = mysqli_real_escape_string($conn, $_POST['tripDate']);
//echo "tripDate (checking) " . $tripDate_v;
$duration_v = mysqli_real_escape_string($conn, $_POST['duration']);
//echo "duration (checking) " . $duration_v;
$summary_v = mysqli_real_escape_string($conn, $_POST['summary']);
//echo "summary (checking) " . $summary_v;

//Now inset into  DB
$sqlTripsUpdate= "INSERT INTO trips VALUES(DEFAULT, '$heading_v', '$tripDate_v', '$duration_v', '$summary_v')";

    if ($conn->query($sqlTripsUpdate) === TRUE) {
        echo "<h4>Data has been added succesfully to DB.</h4>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
?>    

    <a id="adventures_link" href="index.php">View All Adventures</a>
</main>

<?php 
    include 'footer.php';
?>