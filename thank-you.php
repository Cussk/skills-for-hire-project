<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>

    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <title>Thank You</title>

    <?php
        include 'header.php';
    ?>

    <main>
        <h2>Thank You</h2>
        <hr/>
        <p class="thank_p"> Thank you: <?php echo $_GET["email"];?>.</p>
        <p class="thank_p"> We will contact you about the: <br/> <?php echo $_GET["location"];?> trip on the <?php echo $_GET["trip-date"];?>.</p>
    </main>

    <?php 
        include 'footer.php';
    ?>