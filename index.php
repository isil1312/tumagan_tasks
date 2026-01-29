<?php

 $servername = "localhost";
 $username = "root";
 $password = ""; 
 $dbname = "tumagan_db";

 $conn = new mysqli($servername, $username, $password, $dbname);

 if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
 }

 $sql = "SELECT * FROM usertbl";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {

  echo "<h2 style='text-align:center'>User Table</h2>";

  echo "
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 70%;
            margin: auto;
        }

        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
    ";

    echo "<table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Contact</th>
                <th>Gender</th>
            </tr>";
            
            while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["Id"] . "</td>
                    <td>" . $row["Name"] . "</td>
                    <td>" . $row["Email"] . "</td>
                    <td>" . $row["Password"] . "</td>
                    <td>" . $row["Contact"] . "</td>
                    <td>" . $row["Gender"] . "</td>
                </tr>";
            }
            "</table>";
 } else {
    echo "0 results";
 }

?>