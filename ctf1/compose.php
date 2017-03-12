<html>

<?php
include_once('includes/config.php');
?>

<head>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/custom.css">

    <title>Compose</title>
</head>

<body>
<nav>
    <h1>Enigmail</h1>
</nav>
<row>
    <div class="large-2 column">

    </div>
    <div class="large-8 column">
        <h3>Compose</h3>
        <hr>
        <form action="" method="POST">
            <input type="text" placeholder="Subject" name="subject">
            <textarea placeholder="Message" name="body"></textarea>
            <input type="email" placeholder="Recipient Email" name="recipient">
            <button type="submit" name="Submit">Send!</button>
        </form>
    </div>
    <div class="large-2 column">

    </div>
</row>


</body>
</html>