<html>

<?php
include_once('includes/config.php');
$conn->select_db('Gratification');
?>

<head>
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <title>C.A.T Sec</title>
</head>
<body>
<nav>
    <h1>Enigmail</h1>
</nav>
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
                $row = mysqli_fetch_assoc($result);
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
        <a class="button" href="compose.php">Compose</a>
    </div>
</div>
</body>
</html>
