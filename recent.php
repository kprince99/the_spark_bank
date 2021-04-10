<?php

       $date = date('Y-m-d H:i:s');

 		$sql3 = "INSERT INTO history (S.no, sender, receiver, Amount ,Time)
            VALUES (' ', '$sender', '$receiver', '$amount', '$date')";

              mysqli_query($conn, $sql3);

              echo $sql3;
  	 
 ?>