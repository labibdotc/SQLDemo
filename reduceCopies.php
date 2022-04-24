<!DOCTYPE html>
<html>
<head>
<?php
        $server = "abdulrahmana.sgedu.site";
        $userid = "upqeefcc5fgkc";
        //user: upqeefcc5fgkc
        $pw = "ncnpl8o8ytgt";
        //ncnpl8o8ytgt
        $db = "dbknfdpjrcfcoo";
        //dbknfdpjrcfcoo

        $conn = new mysqli($server, $userid, $pw, $db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // echo "Connected successfully<br>";

        $title = $_POST['title'];

        echo $title;

        $sql = "UPDATE `Books` SET Copies=Copies-1 WHERE title='$title'";
        $result = $conn->query($sql);
        //do something with the results
        //echo that or something update field of html elements
        echo ( $result->fetch_assoc() )["Copies"] . "<br>";

        $conn->close();
?>
</head>
<body>
    
</body>
</html>