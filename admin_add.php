<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>

    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <title>Admin</title>

    <?php
    include 'header.php';
    ?>

    <main>
        <h2>Admin - Add Adventure</h2>
        <hr>
        <h4>Input details about the trip.</h4>
        <form action="admin_confirm.php" method="post">
            <label class="form_label" for="heading">Heading:</label>
            <input type="text" id="heading" name="heading" placeholder="" required><br>
            <label class="form_label" for="tripDate">Trip Date:</label>
            <input type="date" id="tripDate" name="tripDate" required><br>
            <label class="form_label" for="duration">Duration:</label>
            <input type="text" id="duration" name="duration" placeholder="" required><br>
            <label class="form_label" for="summary">Summary:</label>
            <input type="text" id="summary" name="summary" placeholder="" required><br>
            <input class="form_btn" type="submit" value="Submit">
            <input class="form_btn" type="reset">
        </form>
    </main>

    <?php
    include 'footer.php';
    ?>