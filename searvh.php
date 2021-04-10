
<?php

include 'connection.php';

if(isset($_POST["query"]))
{
    $account = $_POST["query"];


$query = "SELECT * FROM users_data WHERE Account_Number = $account";

 	$result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) > 0)
  {
     $row = mysqli_fetch_assoc($result);
 	    echo " HOLDER NAME :".$row['Name'];
 	}

 	else
 		  echo "No Database Available";
}

?>