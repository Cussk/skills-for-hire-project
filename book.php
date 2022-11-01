<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>

    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <title>Book Trip</title>

    <?php
        include 'header.php';
    ?>

    <main>
    <h2>Book A Trip</h2>
    <hr>
    <h4>Just Some Quick Details</h4>
    <!-- form redirects to thank-you page using get method when submitted -->
    <form action="thank-you.php" method="get">
        <label class="form_label" for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Your Email" required><br>
        <label class="form_label" for="location">Location:</label>
        <select id="location" name="location">
            <option value="" selected disabled>Select</option>
            <option value="Halifax">Halifax</option>
            <option value="Sydney">Sydney</option>
        </select><br>
        <label class="form_label" for="trip-date">Trip Date:</label>
        <input  type="date" id="trip-date" name="trip-date" required><br>
        <input class="form_btn" type="submit" value="Book">
        <input class="form_btn" type="reset">
    </form>
    </main>

    <?php 
        include 'footer.php';
    ?>