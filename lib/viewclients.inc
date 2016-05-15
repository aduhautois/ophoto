<?php 

    $result = "SELECT * FROM users WHERE active = 1 ORDER BY LastName";

    $result = mysqli_query($connect, $result);

    echo "<table>";
    echo "<tr><th>Client</th><th>First Name</th><th>Last Name</th><th>Phone</th><th>Address</th><th>City</th><th>State</th><th>Zip</th><th>E-Mail</th></tr>";


    if (!$result) {
        echo 'Whoops, that didn\'t work. Try again.';
    } else {
        while ($row = mysqli_fetch_array($result)) 

        {
            echo "<tr><td>".$row["UserID"]."</td><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["Phone"]."</td><td>".$row["Address"]."</td><td>".$row["City"]."</td><td>".$row["State"]."</td><td>".$row["Zip"]."</td><td>".$row["Email"]."</td></tr>";
        }

    }    
    echo "</table>";
?>