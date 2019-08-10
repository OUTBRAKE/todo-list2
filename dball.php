<?php
    $conn = mysqli_connect("127.0.0.1","root", "", "music08");

    if (!$conn) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    
    echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
    echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;
    echo "<br>";

    $sql = "SELECT * FROM tracks";
    $result = $conn->query($sql);

    $mydata = $result->fetch_all(MYSQLI_ASSOC);

    foreach ($mydata as $key => $row) {
        echo "ROW:$key :";
        // var_dump($row);
        echo $row['name'];
        echo "<hr>";
    }


  


    mysqli_close($conn);