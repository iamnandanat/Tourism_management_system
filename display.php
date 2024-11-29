<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nandudb";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo"Connection failed: " . $conn->connect_error;
}

$sql_query = "select * from book"; 

$name="name";
$email="email";
$phone="phone";
$address="address";
$location="location";
$guests="guests";
$arrival="arrival";
$leaving="leaving";

$result=$conn->query($sql_query);
if($result->num_rows>0)
			{
                echo"<table border='2'>";
                echo"<tr>";
                echo"<th>name</th>";
                echo"<th>email</th>";
                echo"<th>phone</th>";
                echo"<th>address</th>";
                echo"<th>wherefrom</th>";
                echo"<th>howmany</th>";
                echo"<th>arrival</th>";
                echo"<th>leaving</th>";
                echo"</tr>";
               
				while ($row=$result->fetch_assoc()) {
					$name=$row['name'];
                    $email=$row['email'];
                    $phone=$row['phone'];
                    $address=$row['address'];
                    $location=$row['wherefrom'];
                    $guests=$row['howmany'];
                    $arrival=$row['arrival'];
                    $leaving=$row['leaving'];
                    echo"<tr>";
                    echo"<th>$name</th>";
                    echo"<th>$email</th>";
                    echo"<th>$phone</th>";
                    echo"<th>$address</th>";
                    echo"<th>$location</th>";
                    echo"<th>$guests</th>";
                    echo"<th>$arrival</th>";
                    echo"<th>$leaving</th>";
                    echo"</tr>";
                  
				}
                echo"</table>";
                echo"<form action='delete.php' method='get'>";
                echo"<input type='text' value='$username' name='uname'>";
                echo"<input type='submit' value='delete' name='dlt'>";
                echo"</form>";
            }

 $conn->close();
?>
