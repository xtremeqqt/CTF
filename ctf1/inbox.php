<html>

<?php
include_once('includes/config.php');

$conn->select_db('Gratification');



?>

<head>
    <link rel="stylesheet" href="css/foundation.min.css">
    <title>C.A.T Sec</title>
</head>
<body>
<h1>C.A.T Sec CTF-1</h1>
<div class="row">
    <div class="large-2 column">
        <p style="text-align: center">ting 1</p>
    </div>
    <div class="large-8 column">
        <?php
        if (isset($_GET['email'])) {
            $email = $conn->real_escape_string($_GET['email']);
            $sql = "SELECT author, subject, body FROM emails where id = $email";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_row($result);
                echo "<h3>" . $row['subject'] . "</h3>";
                echo "<hr>";
                echo "<p>" . $row['body'] . "</p>";
            }

        } else {
            echo "<h3 > Inbox</h3 >";
            echo "<hr>";
            $sql = "SELECT id, subject FROM emails";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    echo "<a href='inbox.php?email=$id'>" . $row['subject'] . "</a><br />";
                }
            } else {
                echo "Fail";
            }
        }
        ?>

    </div>
    <div class="large-2  columns">
        <p style="text-align: center">ting 3</p>
    </div>
</div>
</body>
</html>
