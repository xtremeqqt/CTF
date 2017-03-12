<html>

<?php
    include_once('includes/config.php');

    $conn->select_db('Gratification');

    $sql = "SELECT * FROM 'emails'";
    $result = mysqli_query($conn, $sql);

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
            echo mysqli_num_rows($result);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<p>".$row['subject']."</p>";
                }
            } else {
                echo "Fail";
            }
        ?>

    </div>
    <div class="large-2  columns">
        <p style="text-align: center">ting 3</p>
    </div>
</div>
</body>
</html>
