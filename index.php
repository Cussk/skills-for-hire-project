<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>

    <meta http-equiv='X-UA-Compatible' content='IE=edge'>

    <title>Halifax Canoe and Kayak</title>

    <?php
        include 'header.php';
    ?>

    <main>

        <section class="img_text">
            <img src="./images/canoe.jpg" alt="Come Experience Canada" class="main_img">
            <div class="centered">Come Experience Canada</div>
        </section>

        <article>
            <h2>Upcoming Adventures</h2>

            <?php
	            $sql = "SELECT * FROM trips";
	            $result = mysqli_query($conn, $sql);

                //if there exist rows in the DB
	            if (mysqli_num_rows($result) > 0) {
	             // output data of each row dynamically on page
	             while($row = mysqli_fetch_assoc($result)) {
	                 echo "<h3>" . $row["heading"] . "</h3>";
                     echo "<p class='date_duration'>" . "Date: " . $row["tripDate"] . "</p>";
                     echo "<p class='date_duration'>" . "Duration: " . $row["duration"] . " days" . "</p>";
                     echo "<h4>Summary</h4>";
                     echo "<p class='description'>" . $row["summary"] . "</p>";
	                }
                //if no rows in DB print below
	            } else {
	                    echo "0 results";
	                    }
            ?>
        </article>
    </main>

    <?php 
        include 'footer.php';
    ?>