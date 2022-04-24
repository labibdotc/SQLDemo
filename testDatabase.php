<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <?php
        // $server = "localhost";
        // $userid = "ugqykoq0cs7sx";
        // $pw = "qik5f4p5cjap";
        // $db = "db4rkdmt6agc0g";
        $server = "abdulrahmana.sgedu.site";
        $userid = "upqeefcc5fgkc";
        $pw = "ncnpl8o8ytgt";
        $db = "dbknfdpjrcfcoo";

        $conn = new mysqli($server, $userid, $pw, $db);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // echo "Connected successfully<br>";

        $sql = "SELECT * FROM Books";
        $result = $conn->query($sql);

        // $title = "";
        // $sql2 = "UPDATE `Books` "

        if ($result->num_rows > 0) {
            $s = "<table border='0' cellpadding='3'>";

            while ($row = $result->fetch_assoc()) {
                $s .= "<tr>";
                $title = $row['Title'];
                $s .= "<td>$title</td>";
                $s .= "<td>{$row['Last Name']}, {$row['First Name']}</td>";
                $s .= "<td>{$row['Genre']}</td>";
                $s .= "<td>{$row['Year']}</td>";
                $s .= "<td>{$row['Copies']} copies available</td>";
                $s .= "<td><form action='reduceCopies.php' method='post'><input type='hidden' value='$title' name='title'><input type='submit'></form></td>";
            }
            $s .= "</table>";
            echo $s;
        }

        $conn->close();
    ?>
</body>
</html>